<template>
    <v-container class="login">
        <v-layout
                align-center
                column
                justify-center
        >
            <v-card>
                <v-container
                        fluid
                        grid-list-lg
                >
                    <v-container fluid text-xs-center>
                        <h2>
                            {{ $t('message.login') }}
                        </h2>
                    </v-container>

                    <v-form ref="form">
                        <v-container fluid grid-list-xl>
                            <v-layout wrap align-center>
                                <v-flex
                                        xs12
                                        d-flex
                                >
                                    <v-text-field
                                            v-model="telephone"
                                            :rules="[phoneRules.required, phoneRules.valid]"
                                            color="accent"
                                            :label="$t('message.phoneNumber')"
                                            outline
                                    ></v-text-field>
                                </v-flex>

                                <v-flex
                                        xs12
                                        d-flex
                                >
                                    <v-text-field
                                            v-model="password"
                                            :append-icon="show ? 'visibility' : 'visibility_off'"
                                            :rules="[passwordRules.required, passwordRules.min]"
                                            :type="show ? 'text' : 'password'"
                                            color="accent"
                                            :label="$t('message.password')"
                                            outline
                                            counter
                                            @click:append="show = !show"
                                    ></v-text-field>
                                </v-flex>
                            </v-layout>

                            <v-btn dark round large class="accent" @click="login">
                                {{ $t('message.login') }}
                            </v-btn>

                            <v-layout wrap text-xs-center align-center justify-space-around>
                                <v-flex xs6>
                                    <fb-signin-button
                                            :params="fbSignInParams"
                                            @success="onFacebookAuthSuccess"
                                            @error="onFacebookAuthFail">
                                        <v-btn icon class="primary">
                                            <v-icon>fab fa-facebook</v-icon>
                                        </v-btn>
                                    </fb-signin-button>
                                </v-flex>

                                <v-flex xs6>
                                    <g-signin-button
                                            :params="googleSignInParams"
                                            @success="onGoogleAuthSuccess"
                                            @error="onGoogleAuthFail">
                                        <v-btn icon dark class="red">
                                            <v-icon>fab fa-google</v-icon>
                                        </v-btn>
                                    </g-signin-button>
                                </v-flex>
                            </v-layout>
                        </v-container>
                    </v-form>
                </v-container>
            </v-card>
        </v-layout>
    </v-container>
</template>

<script>
    import AppConfig from '../../constants/AppConfig';

    export default {
        name: "Login",

        data() {
            return {
                valid: false,
                telephone: '',
                password: '',
                show: false,
                phoneRules: {
                    required: value => !!value || this.$i18n.t('message.requiredField'),
                    valid: v =>
                        (/(6)[0-9]{8}/.test(v) || /(2)[0-9]{8}/.test(v)) ||
                        this.$i18n.t('message.phoneNotValid')
                },
                passwordRules: {
                    required: value => !!value || this.$i18n.t('message.requiredField'),
                    min: v => v.length >= 6 || this.$i18n.t('message.minCharacters', { n: '6' })
                },
                fbSignInParams: {
                    scope: 'email,user_likes',
                    return_scopes: true
                },
                googleSignInParams: {
                    client_id: AppConfig.googleClientID
                }
            }
        },

        methods: {
            login: function () {
                if (this.$refs.form.validate()) {
                    let data = {
                        telephone: this.telephone,
                        password: this.password
                    };

                    this.$store.dispatch('loginHandler', { args: data });
                }
            },

            oAuthLogin: function (provider, provider_id) {
                let data = {
                    provider: provider,
                    provider_id: provider_id
                };

                let errorMessage = this.$i18n.t('message.noAccountFound');

                this.$store.dispatch('oAuthLoginHandler', { args: data, errorMessage: errorMessage });
            },

            onFacebookAuthSuccess: function (response) {
                FB.api('/me', user => {
                    this.oAuthLogin('facebook', user.id);
                })
            },

            onFacebookAuthFail: function (error) {
                Vue.notify({
                    type: 'error',
                    text: error.message
                });
            },

            onGoogleAuthSuccess: function (googleUser) {
                const profile = googleUser.getBasicProfile();

                this.oAuthLogin('google', profile.Eea);
            },

            onGoogleAuthFail: function (error) {
                Vue.notify({
                    type: 'error',
                    text: error.message
                });
            }
        }
    }
</script>

<style scoped>

</style>