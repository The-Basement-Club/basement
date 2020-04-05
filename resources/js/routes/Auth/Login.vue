<template>
    <div class="flex flex-wrap w-full h-full items-center align-middle">
        <div class="w-full sm:w-3/4 md:w-1/2 lg:w-1/3 xl:w-1/4 mx-auto bg-red-600 shadow-lg rounded">
            <div class="flex flex-col m-4 text-xl">
                <router-link to="/debates" class="flex flex-wrap justify-center w-full mb-4">
                    <Logo class="h-16 fill-current" />
                </router-link>

                <div v-if="form.instance.hasErrors('message')" class="mt-2 w-full text-red-700 bg-red-100 p-4 rounded text-sm">
                    {{ form.instance.error('message')}}
                </div>

                <div>
                    <label class="text-sm text-white mt-4 block">Email</label>
                    <div class="w-full relative text-white focus-within:text-blue-500 mt-2">
                        <input v-model="form.email" placeholder="john@example.com" class="block w-full rounded pr-12 pl-4 py-2 text-lg border-3 text-red-700 border-transparent bg-gray-200 focus:border-blue-500  focus:outline-none" />
                    </div>
                    <div v-if="form.instance.hasErrors('email')" class="mt-2 w-full text-white text-sm italic">
                        {{ form.instance.error('email')}}
                    </div>
                </div>

                <div>
                    <label class="text-sm text-white mt-4 block">Password</label>
                    <div class="w-full relative text-white focus-within:text-blue-500 mt-2">
                        <input type="password" v-model="form.password" placeholder="***********" class="block w-full rounded pr-12 pl-4 py-2 text-lg border-3 text-red-700 border-transparent bg-gray-200 focus:border-blue-500  focus:outline-none" />
                    </div>
                    <div v-if="form.instance.hasErrors('password')" class="mt-2 w-full text-white text-sm italic">
                        {{ form.instance.error('password')}}
                    </div>
                </div>

                <div class="w-full mt-4">
                    <button @click.prevent="login" class="py-2 px-4 w-full rounded flex items-center justify-center text-white border border-white hover:bg-white hover:text-red-700">
                        Login
                    </button>
                </div>

                <hr class="mt-4" />

                <div class="flex flex-wrap justify-between mt-4 text-base">
                    <router-link to="/register" class="text-white underline">Don't have an account?</router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        auth: true,
        data() {
            return {
                social: {
                    googleRedirectUrl: ''
                },
                form: {
                    email: '',
                    password: '',
                    router: this.$router,
                    instance: new Form,
                },
            }
        },
        methods: {
            async login() {
                this.form.instance = new Form()
                try {
                    await this.$store.dispatch('login', this.form)
                } catch (e) {
                    if (e.validationErrors) {
                        this.form.instance.setErrors(e.validationErrors)
                    } else if (e.response){
                        this.form.instance.setErrors({
                            message: [e.response.data.message]
                        })
                    }
                }
            }
        }
    }
</script>
