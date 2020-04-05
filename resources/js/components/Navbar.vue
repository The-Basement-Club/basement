<template>
    <nav class="bg-brand shadow py-4 text-gray-100">
        <div class="px-6 md:px-0">
            <div class="flex items-center justify-center mx-8">
                <div class="mr-6">
                    <a href="/" class="text-lg font-semibold text-white no-underline">
                        <Logo class="fill-current" />
                    </a>
                </div>
                <div class="flex-1 flex flex-wrap items-center text-left">
                    <router-link v-for="item in nav" :key="item.path" class="no-underline hover:underline text-grey-lightest text-sm p-3" :to="item.path || ''">
                        {{ item.name }}
                    </router-link>
                </div>
                <div class="w-16 text-right">
                    <router-link v-if="!user" class="no-underline hover:underline text-grey-lightest text-sm p-3" href="/login">Login</router-link>
                    <div v-else>
                        <router-link to="/logout" class="no-underline hover:underline text-grey-lightest text-sm p-3">Logout</router-link>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</template>

<script>
    import Logo from "./Logo";
    export default {
        components: { Logo },
        props: ['user'],
        computed: {
            nav() {
                return [
                    {
                        name: 'Servers',
                        path: '/servers',
                    },
                    {
                        name: 'Hypervisors',
                        path: '/hypervisors',
                    }
                ];
            }
        }
    }
</script>
