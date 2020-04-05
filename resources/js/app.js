import Vue from 'vue';
import boot from './bootstrap'
import routeConstants from "./routeConstants";
const { router, store, checkTheBackground } = boot(Vue);

window.Vue = Vue;
window.Bus = new Vue();

(async () => {
    window.app = new Vue({
        router,
        store,
        el: '#app'
    })

    const isAuthenticated = store.getters.isLoggedIn;

    // If the user is logged in, goes to a different site, and then comes back to ours; we want to make sure they can't go to the login page again.
    // Due to the order in which Vue-router fires events, we can't rely on the beforeEach to catch this case.
    if (routeConstants.routesThatShouldRedirectToHomePageIfLoggedIn.includes(router.currentRoute.path) && isAuthenticated) {
        app.$router.push(routeConstants.homePage);
    }
})()
