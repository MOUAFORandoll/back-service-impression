<template>
    <v-container>
        <v-stepper v-model="e1">
            <v-stepper-header>
                <v-stepper-step :complete="e1 > 1" step="1">
                    Etape 1
                </v-stepper-step>

                <v-divider></v-divider>

                <v-stepper-step :complete="e1 > 2" step="2">
                    Etape 2
                </v-stepper-step>

                <v-divider></v-divider>

                <v-stepper-step :complete="e1 > 3" step="3">
                    Etape 3
                </v-stepper-step>
            </v-stepper-header>

            <v-stepper-items>
                <v-stepper-content step="1">
                    <v-card
                            class="mb-5"
                            transparent
                    >
                        <v-form ref="step1">
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
                                                v-model="nomS"
                                                :rules="[nameRules.required]"
                                                color="primary"
                                                :label="$t('message.nomSouscripteur')"
                                        ></v-text-field>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-autocomplete
                                                v-model="paysS"
                                                color="primary"
                                                :rules="[nameRules.required]"
                                                :items="countries"
                                                :label="$t('message.paysSouscripteur')"
                                        ></v-autocomplete>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-text-field
                                                v-model="villeS"
                                                :rules="[nameRules.required]"
                                                color="primary"
                                                :label="$t('message.villeSouscripteur')"
                                        ></v-text-field>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-text-field
                                                v-model="telephoneS1"
                                                :rules="[phoneRules.required]"
                                                color="primary"
                                                :label="$t('message.phone1Souscripteur')"
                                        ></v-text-field>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-text-field
                                                v-model="telephoneS2"
                                                color="primary"
                                                :label="$t('message.phone2Souscripteur')"
                                        ></v-text-field>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-text-field
                                                v-model="emailS1"
                                                :rules="[emailRules.required, emailRules.valid]"
                                                color="primary"
                                                :label="$t('message.email1Souscripteur')"
                                        ></v-text-field>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-text-field
                                                v-model="emailS2"
                                                :rules="[emailRules.valid]"
                                                color="primary"
                                                :label="$t('message.email2Souscripteur')"
                                        ></v-text-field>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-autocomplete
                                                v-model="typeSous"
                                                color="primary"
                                                :rules="[nameRules.required]"
                                                :items="types"
                                                :label="$t('message.typeSouscription')"
                                        ></v-autocomplete>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-autocomplete
                                                v-model="paysSous"
                                                color="primary"
                                                :rules="[nameRules.required]"
                                                :items="countries"
                                                :label="$t('message.paysSouscription')"
                                        ></v-autocomplete>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-autocomplete
                                                v-model="sexeS"
                                                color="primary"
                                                :rules="[nameRules.required]"
                                                :items="titres"
                                                :label="$t('message.sexeSouscripteur')"
                                        ></v-autocomplete>
                                    </v-flex>
                                </v-layout>
                            </v-container>
                        </v-form>
                    </v-card>

                    <v-btn
                            color="primary"
                            @click="goToStep2"
                    >
                        {{ $t('message.next') }}
                    </v-btn>
                </v-stepper-content>

                <v-stepper-content step="2">
                    <v-card
                            class="mb-5"
                            transparent
                    >
                        <v-form ref="step2">
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
                                                v-model="nomP"
                                                :rules="[nameRules.required]"
                                                color="primary"
                                                :label="$t('message.nomPartenaire')"
                                        ></v-text-field>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-text-field
                                                v-model="prenomP"
                                                :rules="[nameRules.required]"
                                                color="primary"
                                                :label="$t('message.prenomPartenaire')"
                                        ></v-text-field>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-autocomplete
                                                v-model="sexeP"
                                                color="primary"
                                                :rules="[nameRules.required]"
                                                :items="titres"
                                                :label="$t('message.sexePartenaire')"
                                        ></v-autocomplete>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-text-field
                                                v-model="nomA"
                                                :rules="[nameRules.required]"
                                                color="primary"
                                                :label="$t('message.nomAffiliation')"
                                        ></v-text-field>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-autocomplete
                                                v-model="sexeA"
                                                color="primary"
                                                :rules="[nameRules.required]"
                                                :items="titres"
                                                :label="$t('message.sexeAffiliation')"
                                        ></v-autocomplete>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-text-field
                                                v-model="ageA"
                                                type="number"
                                                :rules="[nameRules.required]"
                                                color="primary"
                                                :label="$t('message.ageAffiliation')"
                                        ></v-text-field>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-autocomplete
                                                v-model="paysA"
                                                color="primary"
                                                :rules="[nameRules.required]"
                                                :items="countries"
                                                :label="$t('message.paysAffiliation')"
                                        ></v-autocomplete>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-autocomplete
                                                v-model="lieuEtablissement"
                                                color="primary"
                                                :rules="[nameRules.required]"
                                                :items="towns"
                                                :label="$t('message.lieuEtablissement')"
                                        ></v-autocomplete>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-text-field
                                                v-model="villeA"
                                                :rules="[nameRules.required]"
                                                color="primary"
                                                :label="$t('message.villeAffiliation')"
                                        ></v-text-field>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-menu
                                                ref="bdayMenu"
                                                v-model="bdayMenu"
                                                :close-on-content-click="false"
                                                :nudge-right="40"
                                                lazy
                                                transition="scale-transition"
                                                offset-y
                                                full-width
                                                min-width="290px"
                                        >
                                            <template slot="activator">
                                                <v-text-field
                                                        v-model="birthdayA"
                                                        :label="$t('message.annivAffiliation')"
                                                        color="primary"
                                                        prepend-icon="event"
                                                        readonly
                                                ></v-text-field>
                                            </template>

                                            <v-date-picker
                                                    ref="picker"
                                                    v-model="birthdayA"
                                                    :max="new Date().toISOString().substr(0, 10)"
                                                    min="1950-01-01"
                                                    @change="save"
                                            ></v-date-picker>
                                        </v-menu>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-text-field
                                                v-model="telephoneA1"
                                                :rules="[phoneRules.required]"
                                                color="primary"
                                                :label="$t('message.phone1Affiliation')"
                                        ></v-text-field>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-text-field
                                                v-model="telephoneA2"
                                                color="primary"
                                                :label="$t('message.phone2Affiliation')"
                                        ></v-text-field>
                                    </v-flex>
                                </v-layout>
                            </v-container>
                        </v-form>
                    </v-card>

                    <v-btn
                            @click="e1 = 1"
                            flat
                    >
                        {{ $t('message.previous') }}
                    </v-btn>

                    <v-btn
                            color="primary"
                            @click="goToStep3"
                    >
                        {{ $t('message.next') }}
                    </v-btn>
                </v-stepper-content>

                <v-stepper-content step="3">
                    <v-card
                            class="mb-5"
                            transparent
                    >
                        <v-form ref="step3">
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
                                                v-model="contact1"
                                                :rules="[nameRules.required]"
                                                color="primary"
                                                :label="$t('message.phone1Contact')"
                                        ></v-text-field>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-text-field
                                                v-model="contact2"
                                                color="primary"
                                                :label="$t('message.phone2Contact')"
                                        ></v-text-field>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-text-field
                                                v-model="nomContact"
                                                :rules="[nameRules.required]"
                                                color="primary"
                                                :label="$t('message.nomContact')"
                                        ></v-text-field>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-text-field
                                                v-model="montantSous"
                                                :rules="[nameRules.required]"
                                                color="primary"
                                                :label="$t('message.montantSouscription')"
                                        ></v-text-field>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-menu
                                                ref="dsignMenu"
                                                v-model="dsignMenu"
                                                :close-on-content-click="false"
                                                :nudge-right="40"
                                                lazy
                                                transition="scale-transition"
                                                offset-y
                                                full-width
                                                min-width="290px"
                                        >
                                            <template slot="activator">
                                                <v-text-field
                                                        v-model="dateSignature"
                                                        :label="$t('message.dateSignature')"
                                                        color="primary"
                                                        prepend-icon="event"
                                                        readonly
                                                ></v-text-field>
                                            </template>

                                            <v-date-picker
                                                    ref="picker"
                                                    v-model="dateSignature"
                                                    :max="new Date().toISOString().substr(0, 10)"
                                                    min="1950-01-01"
                                                    @change="save"
                                            ></v-date-picker>
                                        </v-menu>
                                    </v-flex>
                                </v-layout>
                            </v-container>
                        </v-form>
                    </v-card>

                    <v-btn
                            @click="e1 = 2"
                            flat
                    >
                        {{ $t('message.previous') }}
                    </v-btn>

                    <v-btn
                            color="primary"
                            @click="submit"
                    >
                        {{ $t('message.submit') }}
                    </v-btn>
                </v-stepper-content>
            </v-stepper-items>
        </v-stepper>
    </v-container>
</template>

<script>
    //import { mapGetters } from 'vuex';
    import lodash from 'lodash';
    import moment from 'moment';

    export default {
        name: "AddContract",

        computed: {
            //...mapGetters(["countries"]),

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
                e1: 0,
                color: '#00ADA7',
                bdayMenu: false,
                dsignMenu: false,
                countries: ['Cameroun', 'Belgique'],
                towns: ['Douala', 'Irchonwelz'],
                types: ['Annuelle', 'One shot'],
                nomS: '',
                paysS: 'Cameroun',// ['Cameroun', 'Belgique']
                villeS: '',
                telephoneS1: '',
                telephoneS2: '',
                emailS1: '',
                emailS2: '',
                typeSous: 'Annuelle',// ['Annuelle', 'One shot']
                paysSous: 'Cameroun',// ['Cameroun, 'Belgique']
                sexeS: 'Mme',
                titres: ['M', 'Mme'],
                nomP: '',
                prenomP: '',
                sexeP: 'Mme',
                nomA: '',
                sexeA: '',
                ageA: '',
                paysA: 'Cameroun',// ['Cameroun, 'Belgique']
                lieuEtablissement: 'Douala',// ['Douala', 'Irchonwelz']
                villeA: '',
                birthdayA: '',
                telephoneA1: '',
                telephoneA2: '',
                contact1: '',
                contact2: '',
                nomContact: '',
                montantSous: '',
                dateSignature: moment(new Date()).format('YYYY-MM-DD'),
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

        watch: {
            menu (val) {
                val && setTimeout(() => (this.$refs.picker.activePicker = 'YEAR'))
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

            goToStep2() {
                if (this.$refs.step1.validate()) {
                    this.e1 = 2;
                }
            },

            save (date) {
                this.$refs.bdayMenu.save(date);
            },

            goToStep3() {
                if (this.$refs.step2.validate()) {
                    this.e1 = 3;
                }
            },

            submit() {
                if (this.$refs.step3.validate()) {
                    // Submit to server
                    let args = {
                        nomS: this.nomS,
                        paysS: this.paysS,
                        villeS: this.villeS,
                        telephoneS1: this.telephoneS1,
                        telephoneS2: this.telephoneS2,
                        emailS1: this.emailS1,
                        emailS2: this.emailS2,
                        typeSous: this.typeSous,
                        paysSous: this.paysSous,
                        sexeS: this.sexeS,
                        nomP: this.nomP,
                        prenomP: this.prenomP,
                        sexeP: this.sexeP,
                        nomA: this.nomA,
                        sexeA: this.sexeA,
                        ageA: this.ageA,
                        paysA: this.paysA,
                        lieuEtablissement: this.lieuEtablissement,
                        villeA: this.villeA,
                        birthdayA: this.birthdayA,
                        telephoneA1: this.telephoneA1,
                        telephoneA2: this.telephoneA2,
                        contact1: this.contact1,
                        contact2: this.contact2,
                        nomContact: this.nomContact,
                        montantSous: this.montantSous,
                        dateSignature: this.dateSignature
                    };

                    let successMessage = this.$i18n.t('message.contractMade');
                    let errorMessages = {
                        generic: this.$i18n.t('message.genericError'),
                        error: this.$i18n.t('message.genericError') // TODO: Prendre message approprié
                    };

                    this.$store.dispatch('createContract', { args, errorMessages, successMessage });
                }
            }
        },

        mounted() {
            // Récupérer les pays
            //this.getCountries();
        }
    }
</script>

<style scoped>

</style>