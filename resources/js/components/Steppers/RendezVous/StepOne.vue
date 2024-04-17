<template>
    <div class="card transparent">
        <div class="card-header">
            {{ title }}
        </div>

        <div class="card-body pb-0">
            <div class="form-group">
                <label class="label" for="pays">
                    {{ $t('message.qCountries') }}
                </label>

                <select class="form-control" :class="{ 'is-invalid': $v.form.pays.$error || errors.country }" v-model="$v.form.pays.$model" id="pays">
                    <option v-for="country in mCountries" :key="country.name" :value="country.name">
                        {{ country.name }}
                    </option>
                </select>

                <div class="invalid-feedback" v-if="errors.country">
                    {{ $t('message.requiredField') }}
                </div>
            </div>

            <div class="form-group">
                <label class="label" for="type">
                    {{ $t('message.qTypes') }}
                </label>

                <select class="form-control" :class="{ 'is-invalid': $v.form.type.$error }" v-model="$v.form.type.$model" id="type">
                    <option v-for="type in types" :key="type.key" :value="type.key">
                        {{ type.value }}
                    </option>
                </select>

                <div class="invalid-feedback" v-if="!$v.form.type.required">
                    {{ $t('message.requiredField') }}
                </div>
            </div>

            <div class="form-group">
                <p>
                    Durée en moyenne de l’entretien : {{ intervale.telephonique }} min<br>
                    Pour les présentations en vidéoconférence : {{ intervale.video}} min<br>
                    Votre fuseau horaire est : (en fonction du lieu de résidence)<br>
                </p>

                <label class="label">
                    Choisissez la date et l’heure qui vous conviennent :
                </label>
            </div>

            <div class="form-row mb-3">
                <div class="col-sm-12 col-md-6">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                        </div>

                        <input id="dpicker1" type="date" class="form-control" :class="{ 'is-invalid': $v.form.dpicker1.$error }"
                               v-model="$v.form.dpicker1.$model" :min="minDate">
                    </div>
                    <!--datepicker :disabled-dates="{ to: minDate }"></datepicker-->

                    <div class="invalid-feedback" v-if="!$v.form.dpicker1.required">
                        {{ $t('message.requiredField') }}
                    </div>
                </div> 

                <div class="col-sm-12 col-md-6">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-clock"></i>
                            </div>
                        </div>

                        <select class="form-control" :class="{ 'is-invalid': $v.form.tpicker1.$error }" v-model="$v.form.tpicker1.$model" id="tpicker1">
                            <option v-for="time in times" :key="time" :value="time">
                                {{ time }}
                            </option>
                        </select>

                        <div class="invalid-feedback" v-if="!$v.form.tpicker1.required">
                            {{ $t('message.requiredField') }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-row mb-3">
                <div class="col-sm-12 col-md-6">
                    <!--label class="label" for="dpicker2">
                        Choisissez la date et l’heure qui vous conviennent :
                    </label-->

                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                        </div>

                        <input id="dpicker2" type="date" class="form-control" :class="{ 'is-invalid': $v.form.dpicker2.$error }"
                               v-model="$v.form.dpicker2.$model" :min="minDate">

                        <div class="invalid-feedback" v-if="!$v.form.dpicker2.required">
                            {{ $t('message.requiredField') }}
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-clock"></i>
                            </div>
                        </div>

                        <select class="form-control" :class="{ 'is-invalid': $v.form.tpicker2.$error }" v-model="$v.form.tpicker2.$model" id="tpicker2">
                            <option v-for="time in times" :key="time" :value="time">
                                {{ time }}
                            </option>
                        </select>

                        <div class="invalid-feedback" v-if="!$v.form.tpicker2.required">
                            {{ $t('message.requiredField') }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="label">
                    {{ $t('message.qTime1') }}
                </label>

                <input type="text" class="form-control" v-model="date_debut1" disabled>
            </div>

            <div class="form-group">
                <label class="label">
                    {{ $t('message.qTime2') }}
                </label>

                <input type="text" class="form-control" v-model="date_debut2" disabled>
            </div>

            <div class="form-group">
                <label class="label" for="objet">
                    {{ $t('message.qSubject') }}
                </label>

                <select class="form-control" :class="{ 'is-invalid': $v.form.objet.$error }" v-model="$v.form.objet.$model" id="objet">
                    <option v-for="objet in objets" :key="objet" :value="objet">
                        {{ objet }}
                    </option>
                </select>

                <div class="invalid-feedback" v-if="!$v.form.objet.required">
                    {{ $t('message.requiredField') }}
                </div>
            </div>

            <button type="submit" class="btn btn-sn mb-2" @click="submit">
                {{ $t('message.next') }}
            </button>
        </div>
    </div>
</template>

<script>
    import { mapGetters } from 'vuex';
    //import Datepicker from 'vuejs-datepicker';
    import lodash from 'lodash';
    import moment from 'moment';
    import { required, minLength } from 'vuelidate/lib/validators';

    export default {
        name: "StepOne",

        components: {
            //Datepicker
        },

        props: ['title', 'data'],

        computed: {
            ...mapGetters(["countries", "rdvs", "intervale"]),

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

            date_debut1: function() {
                return moment(this.form.dpicker1 + ' ' + this.form.tpicker1).format('DD/MM/YYYY HH:mm');
            },

            date_debut2: function() {
                return moment(this.form.dpicker2 + ' ' + this.form.tpicker2).format('DD/MM/YYYY HH:mm');
            },

            date_fin1: function() {
                // Check type
                let duration = this.intervale.telephonique;

                if (this.form.type == 'skype') {

                    duration = this.intervale.video;

                }

                // Determine end date1
                return moment(this.date_debut1, 'DD/MM/YYYY HH:mm')

                    .add(duration, 'minutes')

                    .format('DD/MM/YYYY HH:mm');

            },

            date_fin2: function() {
                // Check type
                let duration = this.intervale.telephonique;

                if (this.form.type == 'skype') {

                    duration = this.intervale.video;

                }

                // Determine end date2
                return moment(this.date_debut2, 'DD/MM/YYYY HH:mm')

                    .add(duration, 'minutes')

                    .format('DD/MM/YYYY HH:mm');

            },

            minTime1: function() {
                let format = 'HH:mm';
                let d = moment(this.form.dpicker1).day();

                if (d != 6 && d != 0) {
                    let time = moment(this.form.tpicker1, format);
                    let rTime = moment('18:00', format);

                    if (time.isBefore(rTime)) {
                        this.form.tpicker1 = '18:00';
                    }

                    return '18:00';
                }

                //this.tpicker1 = '08:00';
                //console.log("Time1:", this.tpicker1);

                return '00:00';
            },

            minTime2: function() {
                let format = 'HH:mm';
                let d = moment(this.form.dpicker2).day();

                if (d != 6 && d != 0) {
                    let time = moment(this.form.tpicker2, format);
                    let rTime = moment('18:00', format);

                    if (time.isBefore(rTime)) {
                        this.form.tpicker1 = '18:00';
                    }

                    return '18:00';
                }

                //this.tpicker2 = '08:00';
                //console.log("Time1:", this.tpicker2);

                return '00:00';
            }
        },

        data() {
            return {
                form: _.isEmpty(this.data) ?
                    {
                        pays: '',
                        type: 'appel direct',
                        dpicker1: moment(new Date()).add(3, 'days').format('YYYY-MM-DD'),
                        dpicker2: moment(new Date()).add(3, 'days').format('YYYY-MM-DD'),
                        tpicker1: '08:00',
                        tpicker2: '08:00',
                        objet: 'Information sur nos services'
                    } :
                    this.data,
                types: [
                    { key: 'appel direct', value: 'Appel direct' },
                    { key: 'whatsapp', value: 'WhatsApp' },
                    { key: 'skype', value: 'Skype' },
                ],
                minDate: moment(new Date()).add(3, 'days').format('YYYY-MM-DD'),
                times: [
                    '00:00', '00:30', '01:00', '01:30', '02:00', '02:30', '03:00', '03:30', '04:00', '04:30', '05:00', '05:30', '06:00', '06:30',
                    '07:00', '07:30', '08:00', '08:30', '09:00', '09:30', '10:00', '10:30', '11:00', '11:30', '12:00', '12:30', '13:00', '13:30',
                    '14:00', '14:30', '15:00', '15:30', '16:00', '16:30', '17:00', '17:30', '18:00', '18:30', '19:00', '19:30', '20:00', '20:30',
                    '21:00', '21:30', '22:00', '22:30', '23:00', '23:30'
                ],
                objets: [
                    'Information sur nos services',
                    'Au sujet des rapports médicaux et factures reçus',
                    'Au sujet d’une invitation à un évènement',
                    'Autre sujet',
                ],
                errors: {
                    country: false
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
                if (this.$v.$invalid) {
                    this.errors.country = true;

                    let p = document.getElementById('pays');
                    p.scrollIntoView();
                } else {
                    this.errors.country = false;

                    // Set start and end dates for appointment
                    this.form.date_debut1 = this.date_debut1;
                    this.form.date_debut2 = this.date_debut2;
                    this.form.date_fin1 = this.date_fin1;
                    this.form.date_fin2 = this.date_fin2;

                    // Emit step 1 form data to parent (RendezVous.vue)
                    this.$emit('step-one-data', this.form);
                }

                /*if(!this.$v.$invalid) {
                    // Set start and end dates for appointment
                    this.form.date_debut1 = this.date_debut1;
                    this.form.date_debut2 = this.date_debut2;
                    this.form.date_fin1 = this.date_fin1;
                    this.form.date_fin2 = this.date_fin2;

                    // Emit step 1 form data to parent (RendezVous.vue)
                    this.$emit('step-one-data', this.form);
                }*/
            }
        },

        validations: {
            form: {
                pays: {
                    required,
                    minLength: minLength(3)
                },
                type: {
                    required
                },
                dpicker1: {
                    required
                },
                tpicker1: {
                    required
                },
                dpicker2: {
                    required
                },
                tpicker2: {
                    required
                },
                objet: {
                    required
                }
            }
        },

        watch: {
            $v: {
                handler: function (val) {
                    if(!val.$invalid) {
                        //this.$emit('step-one-data', this.form);
                    }
                }
            }
        },

        mounted() {
            let p = document.getElementById('pays');
            p.scrollIntoView();

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
