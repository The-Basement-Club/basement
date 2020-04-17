<template>
    <div class="my-8">
        <div class="flex flex-wrap w-full">
            <div class="w-full md:w-1/4 pt-2">
                <div class="flex flex-wrap w-full">
                    <div class="uppercase text-gray-600 leading-loose  tracking-wide font-semibold">ACTIONS</div>
                    <router-link to="/servers" :class="{ 'underline': active === '/servers' }" class="flex items-center w-full pt-2">
                        <view-boards-icon class="w-6 h-6 rotate-90" />
                        <span class="ml-2">All servers</span>
                    </router-link>
                    <router-link to="/servers/link" :class="{ 'underline': active === '/servers/link' }" class="flex items-center py-4 w-full">
                        <link-icon class="w-6 h-6 rotate-90" />
                        <span class="ml-2">Link an existing server</span>
                    </router-link>
                </div>
            </div>

            <div class="w-full md:w-3/4">
               <router-view :url="url" />
            </div>
        </div>
    </div>
</template>

<script>
    import { ViewBoardsIcon, LinkIcon } from '@vue-hero-icons/outline'
    export default {
        name: "Servers",
        components: {
            ViewBoardsIcon,
            LinkIcon
        },
        props: ['url'],
        computed: {
            active() {
                return this.$route.fullPath
            }
        }
    }
</script>

<style scoped>

</style>
