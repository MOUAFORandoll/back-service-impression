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
                                                v-model="mContract.nomS"
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
                                                v-model="mContract.paysS"
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
                                                v-model="mContract.villeS"
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
                                                v-model="mContract.telephoneS1"
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
                                                v-model="mContract.telephoneS2"
                                                color="primary"
                                                :label="$t('message.phone2Souscripteur')"
                                        ></v-text-field>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-text-field
                                                v-model="mContract.emailS1"
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
                                                v-model="mContract.emailS2"
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
                                                v-model="mContract.typeSous"
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
                                                v-model="mContract.paysSous"
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
                                                v-model="mContract.sexeS"
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
                                                v-model="mContract.nomP"
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
                                                v-model="mContract.prenomP"
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
                                                v-model="mContract.sexeP"
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
                                                v-model="mContract.nomA"
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
                                                v-model="mContract.sexeA"
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
                                                v-model="mContract.ageA"
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
                                                v-model="mContract.paysA"
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
                                                v-model="mContract.lieuEtablissement"
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
                                                v-model="mContract.villeA"
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
                                                        v-model="mContract.birthdayA"
                                                        :label="$t('message.annivAffiliation')"
                                                        color="primary"
                                                        prepend-icon="event"
                                                        readonly
                                                ></v-text-field>
                                            </template>

                                            <v-date-picker
                                                    ref="picker"
                                                    v-model="mContract.birthdayA"
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
                                                v-model="mContract.telephoneA1"
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
                                                v-model="mContract.telephoneA2"
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
                                                v-model="mContract.contact1"
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
                                                v-model="mContract.contact2"
                                                color="primary"
                                                :label="$t('message.phone2Contact')"
                                        ></v-text-field>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-text-field
                                                v-model="mContract.nomContact"
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
                                                v-model="mContract.montantSous"
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
                                                        v-model="mContract.dateSignature"
                                                        :label="$t('message.dateSignature')"
                                                        color="primary"
                                                        prepend-icon="event"
                                                        readonly
                                                ></v-text-field>
                                            </template>

                                            <v-date-picker
                                                    ref="picker"
                                                    v-model="mContract.dateSignature"
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
    import { mapGetters } from 'vuex';

    export default {
        name: "EditContract",

        computed: {
            ...mapGetters(["contract"]),

            mContract: function() {
                return this.contract;
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
                e1: 0,
                color: '#00ADA7',
                bdayMenu: false,
                dsignMenu: false,
                countries: ['Cameroun', 'Belgique'],
                towns: ['Douala', 'Irchonwelz'],
                types: ['Annuelle', 'One shot'],
                titres: ['M', 'Mme'],
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
            getContract() {
                let args = {
                    contract: this.$route.params.contract
                };
                let errorMessages = {
                    generic: this.$i18n.t('message.genericError'),
                    error: this.$i18n.t('message.genericError') // TODO: Prendre message approprié
                };

                this.$store.dispatch('getContract', { args, errorMessages });
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
                        contract: this.$route.params.contract,
                        nomS: this.mContract.nomS,
                        paysS: this.mContract.paysS,
                        villeS: this.mContract.villeS,
                        telephoneS1: this.mContract.telephoneS1,
                        telephoneS2: this.mContract.telephoneS2,
                        emailS1: this.mContract.emailS1,
                        emailS2: this.mContract.emailS2,
                        typeSous: this.mContract.typeSous,
                        paysSous: this.mContract.paysSous,
                        sexeS: this.mContract.sexeS,
                        nomP: this.mContract.nomP,
                        prenomP: this.mContract.prenomP,
                        sexeP: this.mContract.sexeP,
                        nomA: this.mContract.nomA,
                        sexeA: this.mContract.sexeA,
                        ageA: this.mContract.ageA,
                        paysA: this.mContract.paysA,
                        lieuEtablissement: this.mContract.lieuEtablissement,
                        villeA: this.mContract.villeA,
                        birthdayA: this.mContract.birthdayA,
                        telephoneA1: this.mContract.telephoneA1,
                        telephoneA2: this.mContract.telephoneA2,
                        contact1: this.mContract.contact1,
                        contact2: this.mContract.contact2,
                        nomContact: this.mContract.nomContact,
                        montantSous: this.mContract.montantSous,
                        dateSignature: this.mContract.dateSignature
                    };

                    let successMessage = this.$i18n.t('message.contractUpdated');
                    let errorMessages = {
                        generic: this.$i18n.t('message.genericError'),
                        error: this.$i18n.t('message.genericError') // TODO: Prendre message approprié
                    };

                    this.$store.dispatch('updateContract', { args, errorMessages, successMessage });
                }
            }
        },

        mounted() {
            // Récupérer le contrat
            this.getContract();
        }
    }
</script>

<style scoped>

</style>
