<template>
    <div class="w-full">
        <div class="py-4 text-lg font-bold tracking-wide">
            Link existing infrastructure
        </div>
        <div class="w-full shadow rounded bg-white overflow-hidden">
            <div class="text-sm italic border-b border-gray-200 p-4 bg-gray-100">as root</div>
            <div class="p-4">
                <div class="leading-normal">
                    Install options
                    <div class="w-full flex flex-wrap items-center mt-2">
                        <label class="w-full flex items-center">
                            <input type="checkbox" :disabled="options.metrics" v-model="options.node" /> <span class="ml-2">Install Node LTS v12</span>
                        </label>
                        <label class="w-full flex items-center">
                            <input type="checkbox" v-model="options.metrics" /> <span class="ml-2">Install Metrics monitor</span>
                        </label>
                    </div>
                </div>
                <code><pre class="bg-gray-100 border-gray-300 text-xs p-2 my-4 border">curl "{{ realUrl }}" | sudo bash</pre></code>
                <div class="mt-4">
                    This will link the server that it's being ran on to your account. It will only install node or metrics if they're checked.
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    import { ViewBoardsIcon, LinkIcon } from '@vue-hero-icons/outline'
    export default {
        name: "Link_Server",
        components: {
            ViewBoardsIcon,
            LinkIcon
        },
        data: () => ({
            useLink: true,
            serverToken: null,
            options: {
                metrics: true,
                node: true,
            },
            credential: {
                name: 'Servers in the basement',
                access_token: '',
                type: 'server',
            },
        }),

        watch: {
            isActive(val) {
                if (val) {
                    this.$refs.modal.show();
                } else {
                    this.$refs.modal.hide()
                }
            },
            'options.metrics': function (newValue) {
                this.options.node = newValue
            }
        },

        computed: {
            realUrl() {
                if (!this.serverToken) {
                    return null;
                }

                return buildUrl(this.$store.getters.schema+'link.'+this.$store.getters.domain + '/server/' + this.serverToken, Object.keys(this.options).filter(option => this.options[option]).reduce((base, option) => Object.assign(base, {
                    [option]: this.options[option],
                }), {}))
            },
            busy() {
                return this.$store.getters.busy;
            },
            credentials() {
                return this.$store.getters.credentials
            }
        },

        methods: {
            async saveServer() {
                this.$store.commit('setGeneric', { busy: true });
                let server = await axios.post('/api/servers', {
                    'name': this.form.name,
                    'server': this.form.server,
                    'server_user': this.form.server_user
                });

                this.closeModal();
                this.$toasted.show('Successfully linked server!', {
                    type: 'success',
                    icon: 'check-circle-o',
                    duration: 1300
                })
                this.$store.commit('setGeneric', { busy: false });
            },
            handleLinkServer() {
                this.saveServer()
                    .catch((e) => {
                        let { data } = e.response;
                        this.form.errors = data.errors || {}
                    })
            },
            closeModal: () => Bus.$emit('turnOffModel'),
            async getServerInstallToken() {
                this.$store.commit('setGeneric', { busy: true });
                const tokenName = 'Server creation token';

                const { data } = await axios.get('/api/settings/tokens');
                let creationToken = data.filter(token => token.name === tokenName)[0];

                if (!creationToken) {
                    const { data: token } = await axios.post('/api/settings/tokens', {
                        name: tokenName,
                        abilities: ['server:create']
                    })
                    await this.$store.dispatch('findAllCredentials');
                }

                this.serverToken = this.$store.getters.credentials.filter(cred => cred.name === 'Basement Default Credential')[0].uuid
                this.$store.commit('setGeneric', { busy: false });
            }
        },

        async mounted() {
            await this.getServerInstallToken();
        }
    }
</script>

<style scoped>

</style>
