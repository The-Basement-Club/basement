<template>
    <div class="flex flex-wrap w-full h-full items-center align-middle">
        <div class="w-full sm:w-3/4 md:w-1/2 lg:w-1/3 xl:w-1/4 mx-auto bg-white shadow-lg rounded">
            <div class="flex flex-col m-4 text-xl">
                <router-link to="/debates" class="flex flex-wrap justify-center w-full mb-4">
                    <Logo class="h-16 fill-current" />
                </router-link>

                <div class="flex-col flex items-center">
                    <zondicon icon="refresh" class="w-8 h-8 rotate-fast"></zondicon>
                    <span>
                        Logging you out...
                    </span>
                </div>
                <hr class="mt-4" />

                <div class="flex flex-wrap justify-between mt-4 text-base">
                    <router-link to="/login" class="underline">Login</router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        auth: true,
        async mounted() {
            await this.$store.dispatch('logout')

            this.$router.push('/login')
        }
    }
</script>
