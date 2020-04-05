import ValidationError from './Exceptions/ValidationError'
import routeConstants from "./routeConstants";

export default {
    state: {
        token: localStorage.getItem('token'),
        isLoggedIn: false,
        registerWith: '',
        busy: false,
        currentUser: null,
        categories: [],
        claims: [],
    },
    getters: {
        busy: (state) => state.busy,
        isLoggedIn: (state) => state.isLoggedIn,
        registerWith: state => state.registerWith,
        tokenExpired(state) {
            const token = state.token
            // Token should always be set.
            const base64Url = token.split('.')[1];
            const base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
            const jsonPayload = decodeURIComponent(atob(base64).split('').map(function(c) {
                return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
            }).join(''));

            const parsedToken = JSON.parse(jsonPayload)

            const expDateFromToken = new Date(parsedToken.exp * 1000);
            const now = new Date();
            const diff = (expDateFromToken.getTime() - now.getTime()) / 1000;
            const seconds = Math.abs(diff);

            return seconds <= 0;
        },
        tokenValidSize: state => state.token.split('.').length === 3,
        currentUser: (state) => state.currentUser,
        token: (state) => state.token,
        categories: state => state.categories,
        claims: state => state.claims
    },
    mutations: {
        setGeneric(state, thingsToSet = {}) {
            state = Object.assign(state, thingsToSet);
        },
        setToken(state, token) {
            state.token = token;
            state.currentUser = null;
            localStorage.setItem('token', token || "");
            // Ensure we always have a state where axios has our token.
            setupAxios(token);
        },
        registerWith(state, name) {
            state.registerWith = name;
        },
    },
    actions: {
        async clearExistingToken({ commit }) {
            commit('setGeneric', { isLoggedIn: false });
            commit('setToken', '')
        },
        async checkIfWeAreLoggedIn({ state, getters, commit, dispatch }, { app }) {
             if (getters.currentUser) {
                commit('setGeneric', { isLoggedIn: true });
                return;
            }

            try {
                await dispatch('getCurrentUser', {
                    headers: {
                        'Authorization': 'Bearer ' + getters.token
                    }
                });
            } catch (e) {
                if (app.$route) {
                    if (!app.$route.path.includes('/login') && !app.$route.path.includes('/auth/register')) {
                        app.$router.push('/login')
                    }
                }
            }
        },
        async getCurrentUser({ commit }, options = {}) {
            let { data: user } = await axios.get('/api/user', Object.assign(options, {}));

            await commit('setGeneric', {
                currentUser: user,
                isLoggedIn: true
            });
        },
        async register({ state, getters, commit }, {
            name,
            email,
            password,
            password_confirmation
        }) {
            try {
                let { data: payload } = await axios.post('/auth/register', {
                    name,
                    email,
                    password,
                    password_confirmation
                })

                await commit('setToken', payload.token)
                app.$router.push(routeConstants.homePage)
            } catch (e) {
                if (e.response.status === 422) {
                    throw new ValidationError(e.response.data.errors);
                }
            }
        },
        async login({ state, dispatch, commit }, {
            email,
            password,
            router
        }) {
            try {
                await axios.get('/sanctum/csrf-cookie')

                await axios.post('/auth/login', { email, password });
                setupAxios()
                await dispatch('getCurrentUser');
                router.push(routeConstants.homePage);
            } catch (e) {
                if (e.response.status === 422) {
                    throw new ValidationError(e.response.data.errors);
                }

                if (e.response.status === 403) {
                    throw new ValidationError({
                        message: ["Invalid Credentials"]
                    })
                }

                throw e;
            }
        },
        async logout({ dispatch }) {
            await axios.get('/auth/logout');
            await dispatch('clearExistingToken')
            app.$router.push('/login');
        },
        async authorizeSocialCallback({ state, commit, dispatch }, { app, providerType }) {
            await dispatch('checkIfWeAreLoggedIn', { app })
            try {
                const { data } =  await axios.get(buildUrl('auth/callback/' + providerType, app.$route.query));

                await commit('setToken', data.token)

                await dispatch('getCurrentUser');

                app.$router.push(data.redirect_url)
            } catch (e) {
                // Most likely it's some kind of authentication exception... :thinking:
                app.$toasted.error(e)
                // app.$router.push(HOME_PAGE)
                return null;
            }
        },
        async findAllCategories({ commit }) {
            const { data: categories } = await axios.get('/api/categories')

            commit('setGeneric', { categories })
        },
        async findAllClaims({ state, commit }, { sortDirection, categories = [], query = ''}) {
            try {
                const expand = {
                    'statements.children.children': '*',
                    'category': '*'
                };

                const search = Object.assign(categories.length > 0 ? {
                        category_id: 'in,' + categories.join(',')
                    } : {},
                    query.length > 0 ? {
                        title: 'like,*'+query+'*'
                    } : {});

                const { data } = await axios.get(buildUrl('/api/claims', Object.assign({
                    expand,
                    search,
                    order_by: sortDirection
                })));
                commit('setGeneric', {
                    claims: data
                })
            } catch (e) {
                app.$toasted.error('We failed to get the claims, try refreshing the page.')
            }
        },
        async createClaim({ state, commit }, {
            title,
            source,
            category_id,
            text,
        }) {
            try {
                let { data: claim } = await axios.post('/api/claims', {
                    title,
                    source,
                    category_id,
                    user_id: state.currentUser.id
                });

                let { data: statement } = await axios.post('/api/statements', {
                    claim_id: claim.id,
                    text,
                    source,
                    user_id: state.currentUser.id,
                    side: 'support',
                })

                app.$toasted.success("You've declared your statement!")
                app.$router.push(HOME_PAGE);
            } catch (e) {
                if (e.response.status === 422) {
                    throw new ValidationError(e.response.data.errors);
                }

                throw e;
            }
        }
    }
}
