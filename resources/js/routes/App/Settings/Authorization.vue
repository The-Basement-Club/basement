<template>
        <div class="w-full">
            <div class="w-full shadow rounded bg-white">
                <div class="text-sm font-medium border-b border-gray-200 p-4 bg-gray-100">Credentials</div>
                <div class="px-4">
                    <div v-if="credentials.length > 0">
                        <div class="mt-4" v-for="(cred, i) in credentials" :class="{ 'border-b border-gray-400 py-4': i !== credentials.length-1 }">
                            <div class="inline-block relative w-full">
                                <select v-model="credentialForm" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded leading-tight focus:outline-none focus:shadow-outline">
                                    <option v-for="provider in credentialProviders" :value="provider">{{ provider.name }}</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>

                            <div v-if="credentialForm">
                                <input type="text" v-for="field in credentialForm.fields" v-model="field.value" :placeholder="field.name" class="border-gray-300 border rounded py-2 px-4 w-full mt-4" />
                            </div>
                        </div>
                    </div>
                    <div v-else class="text-center py-4 mt-4">
                        No existing credentials...
                    </div>
                </div>
                <div class="flex flex-wrap justify-between">
                    <button @click.prevent="submitSave" :disabled="credentials.length === 0" :class="{ 'opacity-75 cursor-not-allowed': credentials.length === 0 }" class="rounded py-2 px-4 bg-blue-500 text-white focus:outline-none m-4">
                        Save
                    </button>
                    <button @click.prevent="addAnotherCredential" class="rounded py-2 px-4 border border-blue-500 hover:bg-blue-500 hover:text-white text-blue-500 focus:outline-none m-4">
                        + Add another credential
                    </button>
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
        data() {
            return {
                credentials: [],
                credentialTypes: ['server', 'domain'],
                credentialProviders: [
                    {
                        name: 'DigitalOcean Droplets',
                        type: 'server',
                        fields: [
                            {
                                name: 'API Token',
                                value: '',
                            }
                        ]
                    },
                    {
                        name: 'Namecheap Domains',
                        type: 'domain',
                        fields: [
                            {
                                name: 'API Token',
                                value: '',
                            }
                        ]
                    }
                ],
                credentialForm: {}
            }
        },
        methods: {
            addAnotherCredential() {
                this.credentials.push({
                    name: 'DigitalOcean Droplets',
                    type: 'server',
                    fields: [
                        {
                            name: 'API Token',
                            value: '',
                        }
                    ]
                })
            },
            submitSave() {
                this.credentials.p
            }
        },
        mounted() {
        }
    }
</script>

<style scoped>

</style>
