<template>
    <div v-cloak class="w-full h-full">
        <div class="w-full h-full">
            <nav v-if="currentUser" @keydown.window.escape="open = false" class="bg-gray-800">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between h-16">
                        <div class="flex items-center">
                            <router-link to="/hypervisors" class="flex-shrink-0">
                                <img class="h-8 w-8" src="/img/logo_icon.png" alt="The Basement logo" />
                            </router-link>
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline">
                                    <router-link to="/">
                                        <current-page-indicator :routes="navItems" />
                                    </router-link>

                                    <router-link v-for="item in nav" :key="item.name" class="no-underline hover:underline text-gray-100 text-sm p-3" :to="item.path">
                                        {{ item.name }}
                                    </router-link>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-4 flex items-center md:ml-6">
                                <button class="relative p-1 border-2 border-transparent text-gray-400 rounded-full hover:text-white focus:outline-none focus:text-white focus:bg-gray-700" aria-label="Notifications">
                                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                    </svg>
                                    <svg v-if="busy" class="spinner absolute w-8 h-8 top-0 left-0" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                        <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
                                    </svg>
                                </button>
                                <div class="ml-3 relative">
                                    <div>
                                        <button @click="open = !open" class="max-w-xs flex items-center text-sm rounded-full text-white focus:outline-none focus:shadow-solid" id="user-menu" aria-label="User menu" aria-haspopup="true">
                                            <img class="h-8 w-8 rounded-full" :src="'https://www.gravatar.com/avatar/'+ currentUser.email_hash" alt="" />
                                        </button>
                                    </div>
                                    <transition name="custom-classes-transition"
                                                enter="transition ease-out duration-100" enter-active="transform opacity-0 scale-95" enter-to="transform opacity-100 scale-100" leave="transition ease-in duration-75" leave-active="transform opacity-100 scale-100" leave-to="transform opacity-0 scale-95">
                                        <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                                            <div v-show="open" class="py-1 rounded-md bg-white shadow-xs">
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your Profile</a>
                                                <router-link to="/settings" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</router-link>
                                                <button @click.prevent="$store.dispatch('logout')" class="block w-full focus:outline-none px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 text-left">Sign out</button>
                                            </div>
                                        </div>
                                    </transition>
                                </div>
                            </div>
                        </div>
                        <div class="-mr-2 flex md:hidden">
                            <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white" v-bind:aria-label="open ? 'Close main menu' : 'Main menu'" v-bind:aria-expanded="open">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
            <main class="w-full h-full">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-full h-full">
                    <!-- Replace with your content -->
                    <div class="px-4 sm:px-0 w-full h-full">
                        <router-view />
                    </div>
                    <!-- /End replace -->
                </div>
            </main>
        </div>

    </div>
</template>
<script>
    import routeConstants from '../routeConstants';
    const sleep = (delay) => new Promise(r => setTimeout(r, delay));
    export default {
        name: 'Base',
        data() {
            return {
                open: false,
                navItems: [
                    {
                        name: 'Hypervisors',
                        path: '/hypervisors',
                    },
                    {
                        name: 'Servers',
                        path: '/servers',
                    },
                    {
                        name: 'Link Server',
                        path: '/servers/link',
                    },
                ]
            }
        },
        methods: {
            toggle() {
                this.open = !this.open;
            }
        },
        computed: {
            currentUser() {
                return this.$store.getters.currentUser
            },
            notAuthPage() {
                return !routeConstants.routesThatShouldRedirectToHomePageIfLoggedIn.includes(this.$route.fullPath);
            },
            nav() {
                return this.navItems.filter(item => item.path !== this.$route.fullPath)
            },
            busy() {
                return this.$store.getters.busy;
            }
        },
        mounted() {
            this.$store.dispatch('initialize');
        }
    }
</script>
