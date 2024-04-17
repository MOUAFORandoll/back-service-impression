<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <step-one
                                v-if="step === 1"
                                :title="title"
                                :data="rdvForm1"
                                @step-one-data="setStepOneData"
                        ></step-one>

                        <step-two
                                v-else-if="step === 2"
                                :title="title"
                                :form1="rdvForm1"
                                :form2="rdvForm2"
                                @go-back="goBack"
                                @step-two-data="setStepTwoData"
                        ></step-two>

                        <step-three
                                v-else-if="step === 3"
                                :data="mForm"
                                @book-again="bookAgain"
                        ></step-three>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapGetters } from 'vuex';
    import lodash from 'lodash';
    import Vue from 'vue';
    import moment from 'moment';
    import StepOne from '../components/Steppers/RendezVous/StepOne';
    import StepTwo from '../components/Steppers/RendezVous/StepTwo';
    import AppConfig from '../constants/AppConfig';
    import StepThree from "../components/Steppers/RendezVous/StepThree";

    export default {
        name: "RendezVous",

        components: {
            StepThree,
            StepTwo,
            StepOne
        },

        computed: {
            ...mapGetters(["countries", "rdvs", "intervale", "rdvSent"]),

            mCountries: function() {
                let cArray = [];

                _.forOwn(this.countries, function(value, key) {
                    cArray.push(value);
                });

                return cArray;
            },

            mStyle: function() {
                if (this.type == 'skype')
                    return 'video';
                else
                    return 'regular';
            },

            mForm: function() {
                return $.extend(true, this.rdvForm1, this.rdvForm2);
            },

            mRdvSent: function() {
                return this.rdvSent;
            },

            title: function() {
                if (this.step === 1)
                    return 'Informations du Rendez-Vous';

                if (this.step === 2)
                    return 'Informations Personnelles';
            }
        },

        watch: {
            mRdvSent: function(val) {
                if (val) {
                    // Go to step 3
                    this.step = 3;

                    // Fire sweet alert
                    Vue.swal(
                        this.$i18n.t('message.appointmentMade'),
                        '',
                        'success'
                    );
                }
            }
        },

        data() {
            return {
                baseUrl: AppConfig.baseUrl,
                e1: 0,
                color: '#00ADA7',
                step: 1,
                checked: false,
                pays: '',
                type: 'appel direct',
                types: [
                    { key: 'appel direct', value: 'Appel direct' },
                    { key: 'whatsapp', value: 'WhatsApp' },
                    { key: 'skype', value: 'Skype' },
                ],
                date: '',
                heure_debut: '',
                heure_fin: '',
                objet: 'Information sur nos services',
                objets: [
                    'Information sur nos services',
                    'Au sujet des rapports médicaux et factures reçus',
                    'Au sujet d’une invitation à un évènement',
                    'Autre sujet',
                ],
                nom: '',
                email: '',
                whatsapp: '',
                numero: '',
                skype: '',
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
                timeRules: {
                    required: value => !!value || this.$i18n.t('message.requiredField'),
                    different: value => value != this.tpicker1 || this.$i18n.t('message.pickOtherTimeSlot')
                },
                now: moment(new Date()).format('YYYY-MM-DD HH:mm'),
                today: moment(new Date()).format('YYYY-MM-DD'),
                d1menu: false,
                d2menu: false,
                t1menu: false,
                t2menu: false,
                dpicker1: moment(new Date()).add(3, 'days').format('YYYY-MM-DD'),
                dpicker2: moment(new Date()).add(3, 'days').format('YYYY-MM-DD'),
                minDate: moment(new Date()).add(3, 'days').format('YYYY-MM-DD'),
                tpicker1: '08:00',
                tpicker2: '08:00',
                rdvForm1: {},
                rdvForm2: {},
            }
        },

        methods: {
            setStepOneData(data) {
                this.rdvForm1 = data;

                this.step = 2;
            },

            setStepTwoData(data) {
                this.rdvForm2 = data;

                this.submit();
            },

            goBack({ step, form2 }) {
                this.rdvForm2 = form2;
                this.step = step - 1;
            },

            bookAgain() {
                // Clear appointment forms
                this.rdvForm1 = {};
                this.rdvForm2 = {};

                // Go back to step 1
                this.step = 1;
            },

            getCountries() {
                let args = {};
                let errorMessages = {
                    generic: this.$i18n.t('message.genericError'),
                    error: this.$i18n.t('message.genericError') // TODO: Prendre message approprié
                };

                this.$store.dispatch('getCountries', { args, errorMessages });
            },

            getAppointments() {
                let args = {
                    limit: -1
                };
                let errorMessages = {
                    generic: this.$i18n.t('message.genericError'),
                    error: this.$i18n.t('message.genericError') // TODO: Prendre message approprié
                };

                this.$store.dispatch('getAppointments', { args, errorMessages });
            },

            getIntervals() {
                let args = {};
                let errorMessages = {
                    generic: this.$i18n.t('message.genericError'),
                    error: this.$i18n.t('message.genericError') // TODO: Prendre message approprié
                };

                this.$store.dispatch('getIntervals', { args, errorMessages });
            },

            submit() {
                // Submit to server
                let args = {
                    pays: this.mForm.pays,
                    style: this.mForm.type,
                    date_debut1: this.mForm.date_debut1,
                    date_debut2: this.mForm.date_debut2,
                    date_fin1: this.mForm.date_fin1,
                    date_fin2: this.mForm.date_fin2,
                    objet: this.mForm.objet,
                    nom: this.mForm.nom,
                    email: this.mForm.email,
                    whatsapp: this.mForm.whatsapp,
                    numero: this.mForm.numero,
                    skype: this.mForm.skype
                };

                let successMessage = this.$i18n.t('message.appointmentMade');
                let errorMessages = {
                    generic: this.$i18n.t('message.genericError'),
                    error: this.$i18n.t('message.genericError') // TODO: Prendre message approprié
                };

                this.$store.dispatch('makeAppointment', { args, errorMessages, successMessage });
            },
        },

        mounted() {
            // Récupérer les pays
            this.getCountries();

            // Récupérer les RDVs
            this.getAppointments();

            // Récupérer les intervales
            this.getIntervals();
        }
    }
</script>

<style scoped>

</style>
