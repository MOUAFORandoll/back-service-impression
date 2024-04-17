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
                            {{ $t('message.edit') }} {{ $tc('message.partners', 1) }}
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
                                                    v-model="mPartner.denomination"
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
                                                            v-model="mPartner.adresse"
                                                            :rules="[nameRules.required]"
                                                            color="primary"
                                                            :label="$t('message.address')"
                                                    ></v-text-field>
                                                </v-flex>

                                                <v-flex xs6 d-flex>
                                                    <v-text-field
                                                            v-model="mPartner.ville"
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
                                                    v-model="mPartner.pays"
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
                                                    v-model="mPartner.profession"
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
                                                    v-model="mPartner.specialite"
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
                                                    v-model="mPartner.etablissement_exercice"
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
                                                            v-model="mPartner.etablissement_rue_quartier"
                                                            :rules="[nameRules.required]"
                                                            color="primary"
                                                            :label="$t('message.workSiteStreet')"
                                                    ></v-text-field>
                                                </v-flex>

                                                <v-flex xs6 d-flex>
                                                    <v-text-field
                                                            v-model="mPartner.etablissement_ville"
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
                                                    v-model="mPartner.etablissement_pays"
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
                                                    v-model="mPartner.numero_dordre"
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
                                                    v-model="mPartner.site_internet"
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
                                                    v-model="mPartner.reseau_social"
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
                                                    v-model="mPartner.secretaire_medical"
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
                                                    v-model="mPartner.outil_informatique"
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
                                                    v-model="mPartner.internet"
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
                                                    v-model="mPartner.parking"
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
                                                    v-model="mPartner.nom"
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
                                                    v-model="mPartner.prenom"
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
                                                    v-model="mPartner.telephone"
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
                                                    v-model="mPartner.email"
                                                    dark
                                                    :rules="[emailRules.required, emailRules.valid]"
                                                    color="accent"
                                                    :label="$t('message.email')"
                                            ></v-text-field>
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
                                                        @click="editPartner"
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

    export default {
        name: "EditPartner",

        computed: {
            ...mapGetters(["partner", "countries"]),

            mPartner: function() {
                return this.partner;
            },

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
            getPartner() {
                let args = {
                    partenaire: this.$route.params.partner
                };
                let errorMessages = {
                    generic: this.$i18n.t('message.genericError'),
                    error: this.$i18n.t('message.genericError') // TODO: Prendre message approprié
                };

                this.$store.dispatch('getPartner', { args, errorMessages });
            },

            getCountries() {
                let args = {};
                let errorMessages = {
                    generic: this.$i18n.t('message.genericError'),
                    error: this.$i18n.t('message.genericError') // TODO: Prendre message approprié
                };

                this.$store.dispatch('getCountries', { args, errorMessages });
            },

            editPartner() {
                if (this.$refs.form.validate()) {
                    let args = {
                        nom: this.mPartner.nom,
                        prenom: this.mPartner.prenom,
                        pays: this.mPartner.pays,
                        adresse: this.mPartner.adresse,
                        ville: this.mPartner.ville,
                        profession: this.mPartner.profession,
                        specialite: this.mPartner.specialite,
                        etablissement_exercice: this.mPartner.etablissement_exercice,
                        etablissement_pays: this.mPartner.etablissement_pays,
                        etablissement_ville: this.mPartner.etablissement_ville,
                        numero_dordre: this.mPartner.numero_dordre,
                        site_internet: this.mPartner.site_internet,
                        reseau_social: this.mPartner.reseau_social,
                        secretaire_medical: this.mPartner.secretaire_medical,
                        outil_informatique: this.mPartner.outil_informatique,
                        internet: this.mPartner.internet,
                        parking: this.mPartner.parking,
                        denomination: this.mPartner.denomination,
                        telephone: this.mPartner.telephone,
                        email: this.mPartner.email,
                        rgpd: this.mPartner.rgpd,
                        partenaire: this.$route.params.partner
                    };
                    let successMessage = this.$i18n.t('message.partnerUpdated');
                    let errorMessages = {
                        generic: this.$i18n.t('message.genericError'),
                        error: this.$i18n.t('message.genericError') // TODO: Prendre message approprié
                    };

                    this.$store.dispatch('updatePartner', { args, errorMessages, successMessage });
                }
            }
        },

        mounted() {
            // Récupérer le partenaire
            this.getPartner();

            // Récupérer les pays
            this.getCountries();
        }
    }
</script>

<style scoped>

</style>