<template>
    <div class="flex flex-wrap w-full h-full items-center align-middle">
        <div class="w-full sm:w-3/4 md:w-1/2 lg:w-1/3 xl:w-1/4 mx-auto bg-red-600 shadow-lg rounded my-4">
            <div class="flex flex-col m-4 text-xl">
                <router-link to="/debates" class="flex flex-wrap justify-center w-full mb-4">
                    <Logo class="h-16 fill-current" />
                </router-link>
                <div>
                    <label class="text-sm text-white mt-4 block">Name</label>
                    <div class="w-full relative text-white focus-within:text-red-500 mt-2">
                        <input v-model="form.name" name="name" placeholder="John Smith" class="block w-full rounded pr-12 pl-4 py-2 text-lg border-3 border-transparent bg-gray-200 focus:border-red-500  focus:outline-none" />
                    </div>
                    <div v-if="form.instance.hasErrors('name')" class="mt-2 w-full text-white text-sm italic">
                        {{ form.instance.error('name')}}
                    </div>
                </div>
                <div>
                    <label class="text-sm text-white mt-4 block">Email</label>
                    <div class="w-full relative text-white focus-within:text-red-500 mt-2">
                        <input v-model="form.email" name="email" placeholder="john@example.com" class="block w-full rounded pr-12 pl-4 py-2 text-lg border-3 border-transparent bg-gray-200 focus:border-red-500  focus:outline-none" />
                    </div>
                    <div v-if="form.instance.hasErrors('email')" class="mt-2 w-full text-white text-sm italic">
                        {{ form.instance.error('email')}}
                    </div>
                </div>
                <div>
                    <label class="text-sm text-white mt-4 block">Password</label>
                    <div class="w-full relative text-white focus-within:text-red-500 mt-2">
                        <input v-model="form.password" name="password" type="password" placeholder="************" class="block w-full rounded pr-12 pl-4 py-2 text-lg border-3 border-transparent bg-gray-200 focus:border-red-500  focus:outline-none" />
                    </div>
                    <div v-if="form.instance.hasErrors('password')" class="mt-2 w-full text-white text-sm italic">
                        {{ form.instance.error('password')}}
                    </div>
                </div>
                <div>
                    <label class="text-sm text-white mt-4 block">Confirm password</label>
                    <div class="w-full relative text-white focus-within:text-red-500 mt-2">
                        <input v-model="form.password_confirmation " name="password_confirmation" type="password" placeholder="**********" class="block w-full rounded pr-12 pl-4 py-2 text-lg border-3 border-transparent bg-gray-200 focus:border-red-500  focus:outline-none" />
                    </div>
                    <div v-if="form.instance.hasErrors('password_confirmation ')" class="mt-2 w-full text-white text-sm italic">
                        {{ form.instance.error('password_confirmation ')}}
                    </div>
                </div>
                <div class="w-full mt-4">
                    <button @click.prevent="register" class="py-2 px-4 w-full rounded flex items-center justify-center text-white border border-white hover:bg-white hover:text-red-700">
                        Register
                    </button>
                    <div class="mt-4 text-white text-xs">
                        Also, by registering you agree to
                        <router-link to="/terms" class="underline">
                            our terms and conditions.
                        </router-link>
                    </div>
                </div>
                <hr class="mt-4" />

                <div class="flex flex-wrap justify-between mt-4 text-base">
                    <router-link to="/login" class="text-white underline">Already have an account?</router-link>
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
                    name: '',
                    email: '',
                    password: '',
                    password_confirmation : '',
                    instance: new Form,
                },
            }
        },
        methods: {
            async register() {
                this.form.instance = new Form()
                try {
                    await this.$store.dispatch('register', this.form)
                } catch (e) {
                    this.form.instance.setErrors(e.validationErrors)
                }
            }
        },
        async created() {
            let { data: { redirect_url } } = await axios.get('/auth/login/google');

            this.social.googleRedirectUrl = redirect_url;
        }
    }
</script>
