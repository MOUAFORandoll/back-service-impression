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
                            {{ $t('message.add') }} {{ $tc('message.partners', 1) }}
                        </h2>
                    </v-card-title>

                    <v-form class="form-detail" ref="form">
                        <v-layout>
                            <v-flex xs12>
                                <v-container>
                                    <h2>
                                        {{ $t('message.generalInfo') }}
                                    </h2>

                                    <v-layout
                                            wrap
                                            align-center
                                    >
                                        <v-flex
                                                xs12
                                                d-flex
                                        >
                                            <v-select
                                                    v-model="denomination"
                                                    color="primary"
                                                    :items="denominations"
                                                    item-text="value"
                                                    item-value="key"
                                                    :label="$tc('message.denominations', 1)"
                                            ></v-select>
                                        </v-flex>

                                        <v-flex
                                                xs12
                                                d-flex
                                        >
                                            <v-layout row wrap>
                                                <v-flex xs6 d-flex>
                                                    <v-text-field
                                                            v-model="address"
                                                            :rules="[nameRules.required]"
                                                            color="primary"
                                                            :label="$t('message.address')"
                                                    ></v-text-field>
                                                </v-flex>

                                                <v-flex xs6 d-flex>
                                                    <v-text-field
                                                            v-model="ville"
                                                            :rules="[nameRules.required]"
                                                            color="primary"
                                                            :label="$t('message.city')"
                                                    ></v-text-field>
                                                </v-flex>
                                            </v-layout>
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
                                                    v-model="profession"
                                                    :rules="[nameRules.required]"
                                                    color="primary"
                                                    :label="$t('message.profession')"
                                            ></v-text-field>
                                        </v-flex>

                                        <v-flex
                                                xs12
                                                d-flex
                                        >
                                            <v-text-field
                                                    v-model="specialite"
                                                    :rules="[nameRules.required]"
                                                    color="primary"
                                                    :label="$t('message.specialty')"
                                            ></v-text-field>
                                        </v-flex>

                                        <v-flex
                                                xs12
                                                d-flex
                                        >
                                            <v-text-field
                                                    v-model="etablissement_exercice"
                                                    :rules="[nameRules.required]"
                                                    color="primary"
                                                    :label="$t('message.workSite')"
                                            ></v-text-field>
                                        </v-flex>

                                        <v-flex
                                                xs12
                                                d-flex
                                        >
                                            <v-layout row wrap>
                                                <v-flex xs6 d-flex>
                                                    <v-text-field
                                                            v-model="etablissement_rue_quartier"
                                                            :rules="[nameRules.required]"
                                                            color="primary"
                                                            :label="$t('message.workSiteStreet')"
                                                    ></v-text-field>
                                                </v-flex>

                                                <v-flex xs6 d-flex>
                                                    <v-text-field
                                                            v-model="etablissement_ville"
                                                            :rules="[nameRules.required]"
                                                            color="primary"
                                                            :label="$t('message.workSiteCity')"
                                                    ></v-text-field>
                                                </v-flex>
                                            </v-layout>
                                        </v-flex>

                                        <v-flex
                                                xs12
                                                d-flex
                                        >
                                            <v-autocomplete
                                                    v-model="etablissement_pays"
                                                    color="primary"
                                                    :items="mCountries"
                                                    item-text="name"
                                                    item-value="name"
                                                    :label="$t('message.workSiteCountry')"
                                            ></v-autocomplete>
                                        </v-flex>

                                        <v-flex
                                                xs12
                                                d-flex
                                        >
                                            <v-text-field
                                                    v-model="numero_dordre"
                                                    :rules="[nameRules.required]"
                                                    color="primary"
                                                    :label="$t('message.orderNumber')"
                                            ></v-text-field>
                                        </v-flex>

                                        <v-flex
                                                xs12
                                                d-flex
                                        >
                                            <v-text-field
                                                    v-model="site_internet"
                                                    :rules="[nameRules.required]"
                                                    color="primary"
                                                    :label="$t('message.website')"
                                            ></v-text-field>
                                        </v-flex>

                                        <v-flex
                                                xs12
                                                d-flex
                                        >
                                            <v-text-field
                                                    v-model="reseau_social"
                                                    color="primary"
                                                    :label="$t('message.socialNetwork')"
                                            ></v-text-field>
                                        </v-flex>

                                        <v-flex
                                                xs12
                                                d-flex
                                        >
                                            <p>
                                                {{ $t('message.gotMedicalSecretary') }}
                                            </p>

                                            <v-radio-group
                                                    v-model="secretaire_medical"
                                                    row
                                            >
                                                <v-radio
                                                        color="primary"
                                                        :label="$t('message.yes')"
                                                        :value="true"
                                                ></v-radio>

                                                <v-radio
                                                        color="primary"
                                                        :label="$t('message.no')"
                                                        :value="false"
                                                ></v-radio>
                                            </v-radio-group>
                                        </v-flex>

                                        <v-flex
                                                xs12
                                                d-flex
                                        >
                                            <p>
                                                {{ $t('message.gotItTools') }}
                                            </p>

                                            <v-radio-group
                                                    v-model="outil_informatique"
                                                    row
                                            >
                                                <v-radio
                                                        color="primary"
                                                        :label="$t('message.yes')"
                                                        :value="true"
                                                ></v-radio>

                                                <v-radio
                                                        color="primary"
                                                        :label="$t('message.no')"
                                                        :value="false"
                                                ></v-radio>
                                            </v-radio-group>
                                        </v-flex>

                                        <v-flex
                                                xs12
                                                d-flex
                                        >
                                            <p>
                                                {{ $t('message.gotInternet') }}
                                            </p>

                                            <v-radio-group
                                                    v-model="internet"
                                                    row
                                            >
                                                <v-radio
                                                        color="primary"
                                                        :label="$t('message.yes')"
                                                        :value="true"
                                                ></v-radio>

                                                <v-radio
                                                        color="primary"
                                                        :label="$t('message.no')"
                                                        :value="false"
                                                ></v-radio>
                                            </v-radio-group>
                                        </v-flex>

                                        <v-flex
                                                xs12
                                                d-flex
                                        >
                                            <p>
                                                {{ $t('message.gotParkingSpace') }}
                                            </p>

                                            <v-radio-group
                                                    v-model="parking"
                                                    row
                                            >
                                                <v-radio
                                                        color="primary"
                                                        :label="$t('message.yes')"
                                                        :value="true"
                                                ></v-radio>

                                                <v-radio
                                                        color="primary"
                                                        :label="$t('message.no')"
                                                        :value="false"
                                                ></v-radio>
                                            </v-radio-group>
                                        </v-flex>
                                    </v-layout>
                                </v-container>
                            </v-flex>

                            <v-flex
                                    xs12
                                    sm6
                                    dark
                                    class="primary white--text"
                            >
                                <v-container dark>
                                    <h2 class="font-weight-bold">
                                        {{ $t('message.accountInfo') }}
                                    </h2>

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
                                                    dark
                                                    :rules="[nameRules.required]"
                                                    color="accent"
                                                    :label="$t('message.lastName')"
                                            ></v-text-field>
                                        </v-flex>

                                        <v-flex
                                                xs12
                                                d-flex
                                        >
                                            <v-text-field
                                                    v-model="fname"
                                                    dark
                                                    color="accent"
                                                    :label="$t('message.firstName')"
                                            ></v-text-field>
                                        </v-flex>

                                        <v-flex
                                                xs12
                                                d-flex
                                        >
                                            <v-text-field
                                                    v-model="telephone"
                                                    dark
                                                    :rules="[phoneRules.required]"
                                                    color="accent"
                                                    :label="$t('message.phoneNumber')"
                                            ></v-text-field>
                                        </v-flex>

                                        <v-flex
                                                xs12
                                                d-flex
                                        >
                                            <v-text-field
                                                    v-model="email"
                                                    dark
                                                    :rules="[emailRules.required, emailRules.valid]"
                                                    color="accent"
                                                    :label="$t('message.email')"
                                            ></v-text-field>
                                        </v-flex>

                                        <v-flex
                                                xs12
                                                d-flex
                                        >
                                            <v-text-field
                                                    v-model="password"
                                                    dark
                                                    :append-icon="show ? 'visibility' : 'visibility_off'"
                                                    :rules="[passwordRules.required, passwordRules.min]"
                                                    :type="show ? 'text' : 'password'"
                                                    color="accent"
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
                                                    dark
                                                    :append-icon="showConfirm ? 'visibility' : 'visibility_off'"
                                                    :rules="[matchRules.required, matchRules.match]"
                                                    :type="showConfirm ? 'text' : 'password'"
                                                    color="accent"
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
                                                    dark
                                                    color="accent"
                                                    :rules="[rgpdRules.required]"
                                                    :label="$t('message.rgpd')"
                                            ></v-checkbox>
                                        </v-flex>

                                        <v-flex xs12 sm6>
                                            <v-container
                                                    fluid
                                                    grid-list-x1
                                            >
                                                <v-btn
                                                        round
                                                        large
                                                        class="primary--text"
                                                        @click="addPartner"
                                                >
                                                    {{ $t('message.submit') }}
                                                </v-btn>
                                            </v-container>
                                        </v-flex>
                                    </v-layout>
                                </v-container>
                            </v-flex>
                        </v-layout>
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
        name: "AddPartner",

        computed: {
            ...mapGetters(["countries"]),

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
                denominations: [
                    { key: 'dr', value: 'M.' },
                    { key: 'Mme', value: 'Mme/Mlle' },
                    { key: 'Docteur', value: 'Dr.' },
                    { key: 'Professeur', value: 'Pr.' }
                ],
                denomination: 'dr',
                address: '',
                ville: '',
                profession: '',
                specialite: '',
                etablissement_exercice: '',
                etablissement_rue_quartier: '',
                etablissement_ville: '',
                etablissement_pays: '',
                numero_dordre: '',
                site_internet: '',
                reseau_social: '',
                secretaire_medical: false,
                outil_informatique: false,
                internet: false,
                parking: false,
                lname: '',
                fname: '',
                pays: '',
                telephone: '',
                email: '',
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
                let args = {};
                let errorMessages = {
                    generic: this.$i18n.t('message.genericError'),
                    error: this.$i18n.t('message.genericError') // TODO: Prendre message approprié
                };

                this.$store.dispatch('getCountries', { args, errorMessages });
            },

            addPartner() {
                if (this.$refs.form.validate()) {
                    let args = {
                        denomination: this.denomination,
                        adresse: this.address,
                        ville: this.ville,
                        profession: this.profession,
                        specialite: this.specialite,
                        etablissement_exercice: this.etablissement_exercice,
                        etablissement_rue_quartier: this.etablissement_rue_quartier,
                        etablissement_ville: this.etablissement_ville,
                        etablissement_pays: this.etablissement_pays,
                        numero_dordre: this.numero_dordre,
                        site_internet: this.site_internet,
                        reseau_social: this.reseau_social,
                        secretaire_medical: this.secretaire_medical,
                        outil_informatique: this.outil_informatique,
                        internet: this.internet,
                        parking: this.parking,
                        nom: this.lname,
                        prenom: this.fname,
                        pays: this.pays,
                        telephone: this.telephone,
                        email: this.email,
                        password: this.password,
                        password_confirmation: this.passwordConfirm,
                        rgpd: this.rgpd
                    };
                    let successMessage = this.$i18n.t('message.partnerCreated');
                    let errorMessages = {
                        generic: this.$i18n.t('message.genericError'),
                        error: this.$i18n.t('message.genericError') // TODO: Prendre message approprié
                    };

                    this.$store.dispatch('createPartner', { args, errorMessages, successMessage });
                }
            }
        },

        mounted() {
            // Récupérer les pays
            this.getCountries();
        }
    }
</script>

<style scoped>

</style>