import ValidationError from './Exceptions/ValidationError'
import routeConstants from "./routeConstants";

export default {
    state: {
        isLoggedIn: false,
        registerWith: '',
        busy: false,
        currentUser: null,
        claims: [],
        credentials: [],
        servers: {}
    },
    getters: {
        busy: (state) => state.busy,
        isLoggedIn: (state) => state.isLoggedIn,
        registerWith: state => state.registerWith,
        currentUser: (state) => state.currentUser,
        token: (state) => state.token,
        credentials: state => state.credentials,
        servers: state => Object.values(state.servers).flat(),
        claims: state => state.claims,
        schema: () => process.env.MIX_APP_SCHEMA,
        domain: () => process.env.MIX_APP_DOMAIN,
        url: () => process.env.MIX_APP_URL,
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
        async initialize({ state, getters, dispatch }) {
            if (!state.currentUser) {
                return ;
            }

            Echo.channel('App.User.'+state.currentUser.id)

            await Promise.all(getters.credentials.map(async credential => await dispatch('findAllServers', { id: credential.id})))
        },
        async clearExistingToken({ commit }) {
            commit('setGeneric', { isLoggedIn: false });
            commit('setToken', '')
        },
        async checkIfWeAreLoggedIn({ state, getters, commit, dispatch }, { app }) {
             if (getters.currentUser && getters.isLoggedIn) {
                commit('setGeneric', { isLoggedIn: true });
                return;
            }
            commit('setGeneric', { busy: true })

            try {
                await dispatch('getCurrentUser', {
                    headers: {
                        'Authorization': 'Bearer ' + getters.token
                    }
                });
            } catch (e) {
                commit('setGeneric', { busy: false })
                if (app.$route) {
                    if (!app.$route.path.includes('/login') && !app.$route.path.includes('/auth/register')) {
                        app.$router.push('/login')
                    }
                }
            }
        },
        async getCurrentUser({ commit, dispatch }, options = {}) {
            commit('setGeneric', { busy: true })
            try {
                let { data: user } = await axios.get('/api/user', Object.assign(options, {}));

                await commit('setGeneric', {
                    currentUser: user,
                    isLoggedIn: true,
                    busy: false,
                });

                await dispatch('findAllCredentials')
            } catch (e) {
                commit('setGeneric', { busy: false })
            }
        },
        async register({ state, getters, commit }, {
            name,
            email,
            password,
            password_confirmation
        }) {
            commit('setGeneric', { busy: true })
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
            } finally {
                commit('setGeneric', { busy: false })
            }
        },
        async login({ state, dispatch, commit }, {
            email,
            password,
            router
        }) {
            commit('setGeneric', { busy: true })
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
            } finally {
                commit('setGeneric', { busy: false })
            }
        },
        async logout({ dispatch }) {
            await axios.get('/auth/logout');
            await dispatch('clearExistingToken')

            if (app.$route.fullPath !== '/login') {
                app.$router.push('/login');
            }
        },
        async findAllServers({ commit, state }, { id }) {
            commit('setGeneric', { busy: true})
            try {
                const { data: { data: servers } } = await axios.get('/api/servers/' + id);

                const s = { ...state.servers, ...{
                    [id]: servers
                }};

                commit('setGeneric', { servers: s })
            } catch (e) {
                console.log('No servers found')
            } finally {
                setTimeout(() => commit('setGeneric', { busy: false}), 250)
            }
        },
        async findAllCredentials({ commit }) {
            commit('setGeneric', { busy: true})
            try {
                const { data: credentials } = await axios.get('/api/credentials');
                commit('setGeneric', { credentials })
            } catch (e) {
                console.log('No credentials found')
            } finally {
                setTimeout(() => commit('setGeneric', { busy: false}), 250)
            }
        },
        async deleteServer({ commit }, { id }) {
            commit('setGeneric', { busy: true})
            try {
                const { data: { message } } = await axios.delete('/api/servers/'+id);

                app.$toasted.success(message)
            } catch (e) {
                console.log('No credentials found')
            } finally {
                setTimeout(() => commit('setGeneric', { busy: false}), 250)
            }
        }
    }
}
