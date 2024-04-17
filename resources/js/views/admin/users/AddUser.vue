<template>
    <v-container>
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
                    <v-card-title>
                        <h2>
                            {{ $t('message.add') }} {{ $tc('message.users', 1) }}
                        </h2>
                    </v-card-title>

                    <v-form ref="form">
                        <v-container
                                fluid
                                grid-list-x1
                        >
                            <v-layout
                                    wrap
                                    align-center
                            >
                                <v-flex
                                        xs12
                                        d-flex
                                >
                                    <v-text-field
                                            v-model="lname"
                                            :rules="[nameRules.required]"
                                            color="primary"
                                            :label="$t('message.lastName')"
                                    ></v-text-field>
                                </v-flex>

                                <v-flex
                                        xs12
                                        d-flex
                                >
                                    <v-text-field
                                            v-model="fname"
                                            color="primary"
                                            :label="$t('message.firstName')"
                                    ></v-text-field>
                                </v-flex>

                                <v-flex
                                        xs12
                                        d-flex
                                >
                                    <v-autocomplete
                                            v-model="pays"
                                            color="primary"
                                            :items="mCountries"
                                            item-text="name"
                                            item-value="name"
                                            :label="$tc('message.countries', 1)"
                                    ></v-autocomplete>
                                </v-flex>

                                <v-flex
                                        xs12
                                        d-flex
                                >
                                    <v-text-field
                                            v-model="telephone"
                                            :rules="[phoneRules.required]"
                                            color="primary"
                                            :label="$t('message.phoneNumber')"
                                    ></v-text-field>
                                </v-flex>

                                <v-flex
                                        xs12
                                        d-flex
                                >
                                    <v-text-field
                                            v-model="email"
                                            :rules="[emailRules.required, emailRules.valid]"
                                            color="primary"
                                            :label="$t('message.email')"
                                    ></v-text-field>
                                </v-flex>

                                <v-flex
                                        xs12
                                        d-flex
                                >
                                    <p>
                                        {{ $tc('message.roles', 2) }}
                                    </p>

                                    <template v-for="role in roles">
                                        <v-checkbox
                                                :key="role.id"
                                                v-model="mRoles"
                                                color="primary"
                                                :label="role.name"
                                                :value="role.id"
                                        ></v-checkbox>
                                    </template>
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
                                            color="primary"
                                            :label="$t('message.password')"
                                            counter
                                            @click:append="show = !show"
                                    ></v-text-field>
                                </v-flex>

                                <v-flex
                                        xs12
                                        d-flex
                                >
                                    <v-text-field
                                            v-model="passwordConfirm"
                                            :append-icon="showConfirm ? 'visibility' : 'visibility_off'"
                                            :rules="[matchRules.required, matchRules.match]"
                                            :type="showConfirm ? 'text' : 'password'"
                                            color="primary"
                                            :label="$t('message.passwordConfirm')"
                                            counter
                                            @click:append="showConfirm = !showConfirm"
                                    ></v-text-field>
                                </v-flex>

                                <v-flex
                                        xs12
                                        d-flex
                                >
                                    <v-checkbox
                                            v-model="rgpd"
                                            color="primary"
                                            :rules="[rgpdRules.required]"
                                            :label="$t('message.rgpd')"
                                    ></v-checkbox>
                                </v-flex>
                            </v-layout>

                            <v-btn
                                    dark
                                    round
                                    large
                                    class="primary"
                                    @click="addUser"
                            >
                                {{ $t('message.submit') }}
                            </v-btn>
                        </v-container>
                    </v-form>
                </v-container>
            </v-card>
        </v-layout>
    </v-container>
</template>

<script>
    import { mapGetters } from 'vuex';
    import lodash from 'lodash';

    export default {
        name: "AddUser",

        computed: {
            ...mapGetters(["countries", "roles"]),

            mCountries: function() {
                let cArray = [];

                _.forOwn(this.countries, function(value, key) {
                    cArray.push(value);
                });

                return cArray;
            }
        },

        data() {
            return {
                lname: '',
                fname: '',
                pays: '',
                telephone: '',
                email: '',
                mRoles: [],
                password: '',
                passwordConfirm: '',
                show: false,
                showConfirm: false,
                rgpd: false,
                nameRules: {
                    required: value => !!value || this.$i18n.t('message.requiredField'),
                },
                emailRules: {
                    required: value => !!value || this.$i18n.t('message.requiredField'),
                    valid: v => /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/.test(v) ||
                            this.$i18n.t('message.emailNotValid')
                },
                phoneRules: {
                    required: value => !!value || this.$i18n.t('message.requiredField'),
                },
                rgpdRules: {
                    required: value => !!value || this.$i18n.t('message.requiredField'),
                },
                passwordRules: {
                    required: value => !!value || this.$i18n.t('message.requiredField'),
                    min: v => v.length >= 6 || this.$i18n.t('message.minCharacters', { n: '6' })
                },
                matchRules: {
                    required: value => !!value || this.$i18n.t('message.requiredField'),
                    match: v => v == this.password || this.i18n.t('message.passwordsDontMatch')
                }
            }
        },

        methods: {
            getCountries() {
                let self = this;
                let args = {};
                let errorMessages = {
                    generic: this.$i18n.t('message.genericError'),
                    error: this.$i18n.t('message.genericError') // TODO: Prendre message approprié
                };

                this.$store.dispatch('getCountries', { args, errorMessages });
            },

            getRoles() {
                let args = {
                    limit: -1
                };
                let errorMessages = {
                    generic: this.$i18n.t('message.genericError'),
                    error: this.$i18n.t('message.genericError') // TODO: Prendre message approprié
                };

                this.$store.dispatch('getRoles', { args, errorMessages });
            },

            addUser() {
                if (this.$refs.form.validate()) {
                    let args = {
                        name: this.lname,
                        firstname: this.fname,
                        pays: this.pays,
                        telephone: this.telephone,
                        email: this.email,
                        roles: this.mRoles,
                        password: this.password,
                        password_confirmation: this.passwordConfirm,
                        rgpd: this.rgpd
                    };
                    let successMessage = this.$i18n.t('message.userCreated');
                    let errorMessages = {
                        generic: this.$i18n.t('message.genericError'),
                        error: this.$i18n.t('message.genericError') // TODO: Prendre message approprié
                    };

                    this.$store.dispatch('createUser', { args, errorMessages, successMessage });
                }
            }
        },

        mounted() {
            // Récupérer les pays
            this.getCountries();

            // Récupérer les rôles
            this.getRoles();
        }
    }
</script>

<style scoped>

</style>