<template>
    <div>
        <router-link class="no-underline hover:underline text-gray-100 text-sm rounded bg-page-indicator" style="padding: 4px 6px;" :to="$route.path">
            {{ route.name.replace('-', ' ') }}
        </router-link>
    </div>
</template>

<script>
    const hasChildren = (route) => route.hasOwnProperty('children');

    export default {
        props: ['routes'],
        data() {
            return {
                allRoutes: [],
            }
        },
        methods: {
            exists(route) {
                return this.allRoutes.filter(r => r.name === route.meta.name)[0]
            }
        },
        computed: {
            loading() {
                return this.$store.getters.busy
            },
            route() {
                const pushRoutes = (route, parentRoute = null) => {
                    if (hasChildren(route)) {
                        route.children.forEach((otherRoute) => pushRoutes(otherRoute, route))
                    }

                    if (!route.meta.name) {
                        return
                    }

                    if (this.exists(route)) {
                        return;
                    }

                    this.allRoutes.push({
                        name: route.meta.name.replace('_', ' '),
                        path: route.path,
                    })
                };

                this.$router.options.routes.forEach(pushRoutes);

                const mostLikelyRoute = this.allRoutes.filter(route => route.path === this.$route.fullPath)[0]

                return mostLikelyRoute || {
                    name: 'Error 404'
                }
            },
        }
    }
</script>
