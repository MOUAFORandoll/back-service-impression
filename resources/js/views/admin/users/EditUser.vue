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
                            {{ $t('message.edit') }} {{ $tc('message.users', 1) }}
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
                                            v-model="mUser.name"
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
                                            v-model="mUser.firstname"
                                            color="primary"
                                            :label="$t('message.firstName')"
                                    ></v-text-field>
                                </v-flex>

                                <v-flex
                                        xs12
                                        d-flex
                                >
                                    <v-autocomplete
                                            v-model="mUser.pays"
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
                                            v-model="mUser.telephone"
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
                                            v-model="mUser.email"
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
                            </v-layout>

                            <v-btn
                                    dark
                                    round
                                    large
                                    class="primary"
                                    @click="editUser"
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
        name: "EditUser",

        computed: {
            ...mapGetters(["user", "countries", "roles", "userRoles"]),

            mUser: function() {
                return this.user;
            },

            mCountries: function() {
                let cArray = [];

                _.forOwn(this.countries, function(value, key) {
                    cArray.push(value);
                });

                return cArray;
            },

            mRoles: function() {
                let r = [];

                _.forEach(this.userRoles, function(value) {
                    r.push(value.id);
                });

                return r;
            }
        },

        data() {
            return {
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
                }
            }
        },

        methods: {
            getUser() {
                let args = {
                    user: this.$route.params.user
                };
                let errorMessages = {
                    generic: this.$i18n.t('message.genericError'),
                    error: this.$i18n.t('message.genericError') // TODO: Prendre message approprié
                };

                this.$store.dispatch('getUser', { args, errorMessages });
            },

            getCountries() {
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

            getUserRoles() {
                let args = {
                    user: this.$route.params.user
                };
                let errorMessages = {
                    generic: this.$i18n.t('message.genericError'),
                    error: this.$i18n.t('message.genericError') // TODO: Prendre message approprié
                };

                this.$store.dispatch('getUserRoles', { args, errorMessages });
            },

            editUser() {
                if (this.$refs.form.validate()) {
                    let args = {
                        name: this.mUser.name,
                        firstname: this.mUser.firstname,
                        pays: this.mUser.pays,
                        telephone: this.mUser.telephone,
                        email: this.mUser.email,
                        user: this.$route.params.user,
                        roles: this.mRoles
                    };
                    let successMessage = this.$i18n.t('message.userUpdated');
                    let errorMessages = {
                        generic: this.$i18n.t('message.genericError'),
                        error: this.$i18n.t('message.genericError') // TODO: Prendre message approprié
                    };

                    this.$store.dispatch('updateUser', { args, errorMessages, successMessage });
                }
            }
        },

        mounted() {
            // Récupérer l'utilisateur
            this.getUser();

            // Récupérer les pays
            this.getCountries();

            // Récupérer les rôles
            this.getRoles();

            // Récupérer les rôles de l'utilisateur
            this.getUserRoles();
        }
    }
</script>

<style scoped>

</style>