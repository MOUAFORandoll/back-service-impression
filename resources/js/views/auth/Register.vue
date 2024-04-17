<template>
    <v-container class="register">
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
                            {{ $t('message.register') }}
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
                                            v-model="nom"
                                            :rules="[nameRules.required]"
                                            color="accent"
                                            :label="$t('message.lastName')"
                                            outline
                                    ></v-text-field>
                                </v-flex>

                                <v-flex
                                        xs12
                                        d-flex
                                >
                                    <v-text-field
                                            v-model="prenom"
                                            color="accent"
                                            :label="$t('message.firstName')"
                                            outline
                                    ></v-text-field>
                                </v-flex>

                                <v-flex
                                        xs12
                                        d-flex
                                >
                                    <v-text-field
                                            v-model="date_naissance"
                                            :rules="[dobRules.required, dobRules.valid]"
                                            type="number"
                                            :max="maxYear"
                                            color="accent"
                                            :label="$t('message.yearOfBirth')"
                                            outline
                                    ></v-text-field>
                                </v-flex>

                                <v-flex
                                        xs12
                                        d-flex
                                >
                                    <v-select
                                            v-model="sexe"
                                            name="gender"
                                            color="accent"
                                            :items="genders"
                                            item-text="value"
                                            item-value="key"
                                            :label="$t('message.gender')"
                                            outline
                                    ></v-select>
                                </v-flex>
                            </v-layout>

                            <v-btn dark round large class="accent" @click="next">
                                {{ $t('message.next') }}
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
        name: "Register",

        data() {
            return {
                prenom: '',
                nom: '',
                genders: [
                    {
                        key: 'male',
                        value: this.$i18n.t('message.genderList.male')
                    },
                    {
                        key: 'female',
                        value: this.$i18n.t('message.genderList.female')
                    }
                ],
                sexe: '',
                date_naissance: new Date().getFullYear() - 18,
                provider: null,
                provider_id: '',
                maxYear: new Date().getFullYear(),
                show: false,
                showConfirm: false,
                nameRules: {
                    required: value => !!value || this.$i18n.t('message.requiredField'),
                },
                dobRules: {
                    required: value => !!value || this.$i18n.t('message.requiredField'),
                    valid: v =>
                        v <= new Date().getFullYear() - 18 ||
                        this.$i18n.t('message.dobNotValid')
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
            next: function () {
                if (this.$refs.form.validate()) {
                    let args = {
                        prenom: this.prenom,
                        nom: this.nom,
                        date_naissance: this.date_naissance,
                        sexe: this.sexe
                    };

                    this.$router.push({ name: 'register2', query: args });
                }
            },

            onFacebookAuthSuccess (response) {
                FB.api('/me', user => {
                    let fullName = user.name;
                    let names = fullName.split(" ");

                    this.provider = "facebook";
                    this.provider_id = user.id;
                    this.nom = names[0];
                    this.prenom = names[1];
                })
            },

            onFacebookAuthFail (error) {
                console.log("Error:", error);
            },

            onGoogleAuthSuccess (googleUser) {
                const profile = googleUser.getBasicProfile();

                this.provider = "google";
                this.provider_id = profile.Eea;
                this.nom = profile.wea;
                this.prenom = profile.ofa;
            },

            onGoogleAuthFail (error) {
                console.log("Error:", error);
            }
        }
    }
</script>

<style scoped>

</style>