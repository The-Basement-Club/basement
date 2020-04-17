<template>
    <div class="my-8">
        <div class="flex flex-wrap w-full">
            <div class="w-full md:w-1/4 pt-2">
                <div class="flex flex-wrap w-full">
                    <div class="uppercase text-gray-600 leading-loose  tracking-wide font-semibold">Settings</div>
                    <router-link to="/settings/password" :class="{ 'underline': active === '/settings' }" class="flex items-center w-full pt-2">
                        <view-boards-icon class="w-6 h-6 rotate-90" />
                        <span class="ml-2">Reset Password</span>
                    </router-link>
                    <router-link to="/settings/" :class="{ 'underline': active === '/settings/link' }" class="flex items-center py-4 w-full">
                        <link-icon class="w-6 h-6 rotate-90" />
                        <span class="ml-2">Link...</span>
                    </router-link>
                </div>
            </div>

            <div class="w-full md:w-3/4">
               <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
    import { ViewBoardsIcon, LinkIcon } from '@vue-hero-icons/outline'
    export default {
        name: "Settings",
        components: {
            ViewBoardsIcon,
            LinkIcon
        },
        computed: {
            active() {
                return this.$route.fullPath
            }
        }
    }
</script>

<style scoped>

</style>
