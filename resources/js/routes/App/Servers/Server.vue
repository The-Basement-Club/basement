<template>
    <div class="w-full">
        <div class="py-4 text-lg font-bold tracking-wide">
            {{ server.name }}
        </div>
        <div class="flex flex-wrap w-full -mx-4" v-if="$store.getters.servers.length > 0">
            <div class="shadow rounded bg-white w-full leading-loose mx-4">
                <div class="p-4">
                    <div class="w-full flex justify-between align-middle items-center">
                        <span class="font-medium px-4 rounded-lg shadow-sm" :class="{'bg-red-200 text-red-600': !server.is_powered_on, 'bg-green-200 text-green-600': server.is_powered_on }">• {{ server.is_powered_on ? 'On' : 'Off'}} </span>
                    </div>
                </div>
                <pre>{{ server }}</pre>
                <div class="w-full bg-gray-100 p-4 flex justify-between">
                    <div class="flex flex-col leading-tight">
                        <router-link class="text-blue-500 font-semibold" :to="'/servers/' + server.id">More Information</router-link>
                        <div class="text-xs text-gray-600">{{ server.updated_at | date }}</div>
                    </div>
                    <div class="flex items-center">
                        <button class="focus:outline-none" @click="$store.dispatch('deleteServer', server)">
                            <TrashIcon class="w-4 h-4 text-red-600 fill-current" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { ViewBoardsIcon, LinkIcon, TrashIcon } from '@vue-hero-icons/outline'
    export default {
        name: "Server",
        components: {
            ViewBoardsIcon,
            LinkIcon,
            TrashIcon
        },
        computed: {
            server() {
                return this.$store.getters.servers.filter(server => server.id == this.$route.params.id)[0];
            }
        }
    }
</script>

<style scoped>

</style>
