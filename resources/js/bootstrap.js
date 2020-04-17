import VueRouter from 'vue-router';
import state from './state';
import routes from './router';
import axios from 'axios';
import Vuex from 'vuex'
import VueToasted from 'vue-toasted';
import { buildUrl } from '@kbco/query-builder';
import routeConstants from "./routeConstants";
import moment from 'moment';
import Model from './Model'
import Echo from "laravel-echo"
window.Pusher = require('pusher-js')
window.Echo = new Echo({
    broadcaster: 'pusher',
    key: 'b3c61d17480acbaa3dfb',
    cluster: 'mt1',
    forceTLS: true,
    authorizer: (channel, options) => {
        return {
            authorize: (socketId, callback) => {
                axios.post('/api/broadcasting/auth', {
                    socket_id: socketId,
                    channel_name: channel.name
                })
                    .then(response => {
                        callback(false, response.data);
                    })
                    .catch(error => {
                        callback(true, error);
                    });
            }
        };
    },
});

window.Model = Model;
window.moment = moment;
window.buildUrl = buildUrl;
window.Form = class Form {
    constructor(body) {
        this.errors = {}

        for (let part in body) {
            this[part] = body[part];
        }
    }
    setErrors(errors = {}) {
        this.errors = errors;
    }
    hasErrors(key) {
        return this.errors[key] !== undefined;
    }
    error(key) {
        return this.errors[key][0];
    }
};

const checkTheBackground = (fullPath) => {
    let body = document.querySelector("body");

    if ([
        '/login',
        '/register',
        '/forgotten-password',
        '/password-reset'
    ].includes(fullPath)) {
        let body = document.querySelector("body");
        if (body.classList.contains('bg-gray-200')) {
            body.classList.remove('bg-gray-200');
            body.classList.add('bg-texture');
        }
    } else if (body.classList.contains('bg-texture')) {
        body.classList.remove('bg-texture');
        body.classList.add('bg-gray-200');
    }
}
window.setupAxios = () => {
    const CancelToken = axios.CancelToken;
    const source = CancelToken.source();

    window.axios = axios.create({
        baseURL: process.env.MIX_APP_URL || 'you-need-to-set-your-app-url',
    });
    window.axios.defaults.withCredentials = true;

    window.axios.cancel = (message) => {
        // cancel the requests
        source.cancel(message);
        setupAxios();
    }

    window.axios.interceptors.response.use((response) => response, async function (err) {
        if (err.status === 401) {
            await app.$store.dispatch('logout')
        } else {
            app.$toasted.error(err?.response?.data?.message);
        }
        return Promise.reject(err);
    });
}

setupAxios(localStorage.getItem('token') || null);
checkTheBackground(window.location.pathname);

export default (Vue) => {
    Vue.use(VueRouter);
    Vue.use(Vuex);
    Vue.use(VueToasted, {
        position: 'bottom-right',
        duration: 5000,
        containerClass: 'm-8'
    });

    Vue.filter('date', value => {
        return moment(value).format('MMMM Do, Y hh:mma')
    })

    // This will automatically register .vue files as components based on the file name.
    const files = require.context('./components', true, /\.vue$/i);
    files.keys().map((key) => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

    const store = new Vuex.Store(state);

    const router = new VueRouter({
        mode: 'history',
        routes,
    })

    router.beforeEach(async function (to, from, next) {
        if (to.meta.forceAuth) {
            await store.dispatch('checkIfWeAreLoggedIn', {
                app: {
                    $router: router
                }
            })

            if (!store.getters.isLoggedIn) {
                return router.push('/login')
            }
        }

        // If we're going to the login page, and we're already logged in, we should just redirect to the home page.
        if (routeConstants.routesThatShouldRedirectToHomePageIfLoggedIn.includes(to.path) && store.getters.isLoggedIn) {
            return router.push(routeConstants.homePage)
        }

        checkTheBackground(to.fullPath);

        next();
    });

    return {
        router,
        store,
        checkTheBackground,
    }
}
