<template>
    <div>
        <div class="login">
            <div class="login__logo">
                <img src="/images/logo.png" />
            </div>
            <div class="login__card" v-bind:class="{ hide: registration }">
                <div class="login__title">
                    <h1>Login</h1>
                </div>
                <form class="login__form" action="" method="post">
                    <div class="login__input">
                        <i class="bi bi-envelope"></i>
                        <input type="email" name="email" placeholder="User Email" />
                    </div>
                    <div class="login__input">
                        <i class="bi bi-key"></i>
                        <input type="password" name="password" placeholder="User Password" />
                    </div>
                    <div class="login__remember">
                        <div class="">
                            <input type="checkbox" id="rem" name="rember">
                            <label for="rem"> Remember me</label>
                        </div>
                        <a href="">Forget password?</a>
                    </div>
                    <button class="login__btn">Login</button>
                </form>
                <div class="login__end">
                    <span>Dont have an account?</span>
                    <a v-on:click="showRegistration()">Signup</a>
                </div>
            </div>

            <div class="login__card" v-bind:class="{ hide: login }">
            <div class=" login__title">
                <h1>Registration</h1>
            </div>
            <form class="login__form" action="" method="post">
                <div class="login__input">
                    <i class="bi bi-envelope"></i>
                    <input type="email" name="email" placeholder="User Email" />
                </div>
                <div class="login__input">
                    <i class="bi bi-key"></i>
                    <input type="password" name="password" placeholder="User Password" />
                </div>

                <button class="login__btn">Signup</button>
            </form>
            <div class="login__end">
                <span>Already have an account</span>
                <a v-on:click="showLogin()">Login</a>
            </div>
        </div>
    </div>
    </div>
</template>
<script>
export default {
    data: () => ({
       login: true,
       registration: false,
    }),
    methods:{
        showLogin(){
            this.login = true
            this.registration = false
            console.log('helo')
        },

        showRegistration() {
            console.log('hi')
            this.login = false
            this.registration = true
        }
    },
}
</script>
<style scoped>
</style>