<template>
    <div v-cloak class="w-full h-full">
        <div class="h-full mx-8">
            <router-view />
        </div>
    </div>
</template>
<script>
    import routeConstants from '../routeConstants';
    export default {
        name: 'Base',
        computed: {
            currentUser() {
                return this.$store.getters.currentUser
            },
            notAuthPage() {
                return !routeConstants.routesThatShouldRedirectToHomePageIfLoggedIn.includes(this.$route.fullPath);
            }
        },
    }
</script>
