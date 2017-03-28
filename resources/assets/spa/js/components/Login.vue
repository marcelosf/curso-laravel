<template>

    <div class="container">
        <div class="row">
            <div class="col s8 offset-s2 z-depth-2">
                <h3 class="center">Code Financeiro</h3>

                <form method="POST" @submit.prevent="">

                    <div class="row">
                        <div class="input-field col s12">
                            <input type="email" id="email" class="validate" name="email" v-model="user.email" required autofocus>
                            <label for="email" class="active">E-mail</label>
                        </div>
                    </div>



                    <div class="row">
                        <div class="input-field col s12">
                            <input type="password" id="password" class="validate" name="password" v-model="user.password" required>
                            <label for="password" class="active">Senha</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn" type="submit">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</template>

<script type="text/javascript">
    export default {

        data(){

            return {
                user: {
                    email: '',
                    password:''
                }
            }

        },

        methods: {

            login(){


            }

        }

    }

</script>