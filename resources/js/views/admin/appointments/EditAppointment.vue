<template>
    <v-container class="sv-container">
        <v-stepper v-model="e1">
            <v-stepper-header>
                <v-stepper-step :complete="e1 > 1" step="1">
                    Informations du Rendez-Vous
                </v-stepper-step>

                <v-divider></v-divider>

                <v-stepper-step :complete="e1 > 2" step="2">
                    Informations Personnelles
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
                                        <v-layout row wrap>
                                            <v-flex xs12>
                                                <p class="label">
                                                    {{ $t('message.qCountries') }}
                                                </p>
                                            </v-flex>

                                            <v-flex xs12>
                                                <v-autocomplete
                                                        v-model="mRdv.pays"
                                                        color="primary"
                                                        :rules="[nameRules.required]"
                                                        :items="mCountries"
                                                        item-text="name"
                                                        item-value="name"
                                                ></v-autocomplete>
                                            </v-flex>
                                        </v-layout>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-layout row wrap>
                                            <v-flex xs12>
                                                <p class="label">
                                                    {{ $t('message.qTypes') }}
                                                </p>
                                            </v-flex>

                                            <v-flex xs12>
                                                <v-autocomplete
                                                        v-model="mRdv.style"
                                                        color="primary"
                                                        :rules="[nameRules.required]"
                                                        :items="types"
                                                        item-text="value"
                                                        item-value="key"
                                                ></v-autocomplete>
                                            </v-flex>
                                        </v-layout>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-layout row wrap>
                                            <v-flex xs12>
                                                <v-container>
                                                    <p>
                                                        Durée en moyenne de l’entretien : {{ intervale.telephonique }} min<br>
                                                        Pour les présentations en vidéoconférence : {{ intervale.video}} min<br>
                                                        Votre fuseau horaire est : (en fonction du lieu de résidence)
                                                    </p>

                                                    <p class="label">
                                                        Choisissez la date et l’heure qui vous conviennent :
                                                    </p>
                                                </v-container>
                                            </v-flex>

                                            <v-flex xs12>
                                                <v-layout row wrap>
                                                    <v-flex xs12 sm6>
                                                        <v-menu
                                                                ref="d1menu"
                                                                v-model="d1menu"
                                                                :close-on-content-click="false"
                                                                :nudge-right="40"
                                                                :return-value.sync="mRdv.dpicker1"
                                                                lazy
                                                                transition="scale-transition"
                                                                offset-y
                                                                full-width
                                                                min-width="290px"
                                                        >
                                                            <template slot="activator">
                                                                <v-text-field
                                                                        v-model="mRdv.dpicker1"
                                                                        prepend-icon="event"
                                                                ></v-text-field>
                                                            </template>

                                                            <v-date-picker
                                                                    v-model="mRdv.dpicker1"
                                                                    color="green lighten-1"
                                                                    header-color="primary"
                                                                    :min="minDate"
                                                                    @input="day1Picked"
                                                            ></v-date-picker>
                                                        </v-menu>
                                                    </v-flex>

                                                    <v-flex xs12 sm6>
                                                        <v-menu
                                                                ref="t1menu"
                                                                v-model="t1menu"
                                                                :close-on-content-click="false"
                                                                :nudge-right="40"
                                                                :return-value.sync="mRdv.tpicker1"
                                                                lazy
                                                                transition="scale-transition"
                                                                offset-y
                                                                full-width
                                                                min-width="290px"
                                                        >
                                                            <template slot="activator">
                                                                <v-text-field
                                                                        v-model="mRdv.tpicker1"
                                                                        prepend-icon="schedule"
                                                                ></v-text-field>
                                                            </template>

                                                            <v-time-picker
                                                                    v-model="mRdv.tpicker1"
                                                                    :min="minTime1"
                                                                    format="24hr"
                                                                    @input="time1Picked"
                                                            ></v-time-picker>
                                                        </v-menu>
                                                    </v-flex>
                                                </v-layout>
                                            </v-flex>

                                            <v-flex xs12>
                                                <v-layout row wrap justify-space-between>
                                                    <v-flex xs12 sm6>
                                                        <v-menu
                                                                ref="d2menu"
                                                                v-model="d2menu"
                                                                :close-on-content-click="false"
                                                                :nudge-right="40"
                                                                :return-value.sync="mRdv.dpicker2"
                                                                lazy
                                                                transition="scale-transition"
                                                                offset-y
                                                                full-width
                                                                min-width="290px"
                                                        >
                                                            <template slot="activator">
                                                                <v-text-field
                                                                        v-model="mRdv.dpicker2"
                                                                        prepend-icon="event"
                                                                ></v-text-field>
                                                            </template>

                                                            <v-date-picker
                                                                    v-model="mRdv.dpicker2"
                                                                    color="green lighten-1"
                                                                    header-color="primary"
                                                                    :min="minDate"
                                                                    @input="day2Picked"
                                                            ></v-date-picker>
                                                        </v-menu>
                                                    </v-flex>

                                                    <v-flex xs12 sm6>
                                                        <v-menu
                                                                ref="t2menu"
                                                                v-model="t2menu"
                                                                :close-on-content-click="false"
                                                                :nudge-right="40"
                                                                :return-value.sync="mRdv.tpicker2"
                                                                lazy
                                                                transition="scale-transition"
                                                                offset-y
                                                                full-width
                                                                min-width="290px"
                                                        >
                                                            <template slot="activator">
                                                                <v-text-field
                                                                        v-model="mRdv.tpicker2"
                                                                        prepend-icon="schedule"
                                                                ></v-text-field>
                                                            </template>

                                                            <v-time-picker
                                                                    v-model="mRdv.tpicker2"
                                                                    :min="minTime2"
                                                                    :rules="[timeRules.different]"
                                                                    format="24hr"
                                                                    @input="time2Picked"
                                                            ></v-time-picker>
                                                        </v-menu>
                                                    </v-flex>
                                                </v-layout>
                                            </v-flex>
                                        </v-layout>
                                    </v-flex>

                                    <v-flex
                                        xs12
                                        d-flex
                                    >
                                        <v-layout row wrap>
                                            <v-flex xs12>
                                                <p class="label">
                                                    {{ $t('message.qTime1') }}
                                                </p>
                                            </v-flex>

                                            <v-flex xs12>
                                                <v-text-field
                                                        v-model="date_debut1"
                                                        color="primary"
                                                        disabled
                                                ></v-text-field>
                                            </v-flex>
                                        </v-layout>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-layout row wrap>
                                            <v-flex xs12>
                                                <p class="label">
                                                    {{ $t('message.qTime2') }}
                                                </p>
                                            </v-flex>

                                            <v-flex xs12>
                                                <v-text-field
                                                        v-model="date_debut2"
                                                        color="primary"
                                                        disabled
                                                ></v-text-field>
                                            </v-flex>
                                        </v-layout>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-layout row wrap>
                                            <v-flex xs12>
                                                <p class="label">
                                                    {{ $t('message.qSubject') }}
                                                </p>
                                            </v-flex>

                                            <v-flex xs12>
                                                <v-autocomplete
                                                        v-model="mRdv.objet"
                                                        color="primary"
                                                        :rules="[nameRules.required]"
                                                        :items="objets"
                                                ></v-autocomplete>
                                            </v-flex>
                                        </v-layout>
                                    </v-flex>
                                </v-layout>
                            </v-container>
                        </v-form>
                    </v-card>

                    <div class="text-xs-right">
                        <v-btn
                                color="primary"
                                @click="goToStep2"
                        >
                            {{ $t('message.next') }}
                        </v-btn>
                    </div>
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
                                        <v-layout row wrap>
                                            <v-flex xs12>
                                                <p class="label">
                                                    {{ $t('message.qTime1') }}
                                                </p>
                                            </v-flex>

                                            <v-flex xs12>
                                                <v-text-field
                                                        v-model="selectedDate1"
                                                        color="primary"
                                                        disabled
                                                ></v-text-field>
                                            </v-flex>
                                        </v-layout>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-layout row wrap>
                                            <v-flex xs12>
                                                <p class="label">
                                                    {{ $t('message.qTime2') }}
                                                </p>
                                            </v-flex>

                                            <v-flex xs12>
                                                <v-text-field
                                                        v-model="selectedDate2"
                                                        color="primary"
                                                        disabled
                                                ></v-text-field>
                                            </v-flex>
                                        </v-layout>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-layout row wrap>
                                            <v-flex xs12>
                                                <p class="label">
                                                    {{ $t('message.qName') }}
                                                </p>
                                            </v-flex>

                                            <v-flex xs12>
                                                <v-text-field
                                                        v-model="mRdv.nom"
                                                        :rules="[nameRules.required]"
                                                        color="primary"
                                                ></v-text-field>
                                            </v-flex>
                                        </v-layout>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-layout row wrap>
                                            <v-flex xs12>
                                                <p class="label">
                                                    {{ $t('message.email') }}
                                                </p>
                                            </v-flex>

                                            <v-flex xs12>
                                                <v-text-field
                                                        v-model="mRdv.email"
                                                        :rules="[emailRules.required, emailRules.valid]"
                                                        color="primary"
                                                        :hint="$t('message.emailHint')"
                                                ></v-text-field>
                                            </v-flex>
                                        </v-layout>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-layout row wrap>
                                            <v-flex xs12>
                                                <p class="label">
                                                    {{ $t('message.whatsappNumber') }}
                                                </p>
                                            </v-flex>

                                            <v-flex xs12>
                                                <v-text-field
                                                        v-model="mRdv.whatsapp"
                                                        color="primary"
                                                ></v-text-field>
                                            </v-flex>
                                        </v-layout>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-layout row wrap>
                                            <v-flex xs12>
                                                <p class="label">
                                                    {{ $t('message.phoneNumber') }}
                                                </p>
                                            </v-flex>

                                            <v-flex xs12>
                                                <v-text-field
                                                        v-model="mRdv.telephone"
                                                        :rules="[phoneRules.required]"
                                                        color="primary"
                                                ></v-text-field>
                                            </v-flex>
                                        </v-layout>
                                    </v-flex>

                                    <v-flex
                                            xs12
                                            d-flex
                                    >
                                        <v-layout row wrap>
                                            <v-flex xs12>
                                                <p class="label">
                                                    {{ $t('message.skype') }}
                                                </p>
                                            </v-flex>

                                            <v-flex xs12>
                                                <v-text-field
                                                        v-model="mRdv.skype"
                                                        color="primary"
                                                ></v-text-field>
                                            </v-flex>
                                        </v-layout>
                                    </v-flex>
                                </v-layout>
                            </v-container>
                        </v-form>
                    </v-card>

                    <v-layout row justify-space-around>
                        <v-flex xs4>
                            <v-btn
                                    @click="e1 = 1"
                            >
                                {{ $t('message.previous') }}
                            </v-btn>
                        </v-flex>

                        <v-flex xs4>
                            <v-btn
                                    color="primary"
                                    @click="submit"
                            >
                                {{ $t('message.submit') }}
                            </v-btn>
                        </v-flex>
                    </v-layout>
                </v-stepper-content>
            </v-stepper-items>
        </v-stepper>
    </v-container>
</template>

<script>
    import { mapGetters } from 'vuex';
    import lodash from 'lodash';
    import Vue from 'vue';
    import moment from 'moment';

    export default {
        name: "EditAppointment",

        computed: {
            ...mapGetters(["countries", "rdvs", "rdv", "intervale"]),

            mRdv: function() {
                let r = this.rdv;

                r.dpicker1 = this.rdv.date_debut1 != null ? moment(this.rdv.date_debut1).format('YYYY-MM-DD') : moment(new Date()).format('YYYY-MM-DD');
                r.dpicker2 = this.rdv.date_debut2 != null ? moment(this.rdv.date_debut2).format('YYYY-MM-DD') : moment(new Date()).format('YYYY-MM-DD');
                r.tpicker1 = this.rdv.date_debut1 != null ? moment(this.rdv.date_debut1).format('HH:mm') : moment(new Date()).format('HH:mm');
                r.tpicker2 = this.rdv.date_debut2 != null ? moment(this.rdv.date_debut2).format('HH:mm') : moment(new Date()).format('HH:mm');

                return r;
            },

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

            events: function() {
                let newRdvs = this.rdvs;
                newRdvs.push(this.rdv);

                let eArray = [];

                _.forOwn(this.rdvs, function(value, key) {
                    let durationObject = moment.utc(moment(value.date_fin, 'YYYY-MM-DD HH:mm:ss')
                        .diff(moment(value.date_debut, 'YYYY-MM-DD HH:mm:ss')));

                    let e = {
                        //title: self.$i18n.t('message.' + value.style),
                        title: value.style,
                        date: moment(value.date_debut).format('YYYY-MM-DD'),
                        time: moment(value.date_debut).format('HH:mm'),
                        duration: durationObject._i / (1000 * 60)
                    };

                    eArray.push(e);
                });

                return eArray;
            },

            // Convert the list of events into a map of lists keyed by date
            eventsMap () {
                const map = {};
                this.events.forEach(e => (map[e.date] = map[e.date] || []).push(e));
                return map;
            },

            selectedDate1: function() {
                return moment(this.date_debut1).format('DD/MM/YYYY HH:mm') + ' - ' + moment(this.date_fin1).format('DD-MM-YYYY HH:mm');
            },

            selectedDate2: function() {
                return moment(this.date_debut2).format('DD/MM/YYYY HH:mm') + ' - ' + moment(this.date_fin2).format('DD-MM-YYYY HH:mm');
            },

            date_debut1: function() {
                return moment(this.mRdv.dpicker1 + ' ' + this.mRdv.tpicker1).format('DD/MM/YYYY HH:mm');
            },

            date_debut2: function() {
                return moment(this.mRdv.dpicker2 + ' ' + this.mRdv.tpicker2).format('DD/MM/YYYY HH:mm');
            },

            date_fin1: function() {
                // Check type
                let duration = this.intervale.telephonique;

                if (this.type == 'skype') {

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

                if (this.type == 'skype') {

                    duration = this.intervale.video;

                }

                // Determine end date2
                return moment(this.date_debut2, 'DD/MM/YYYY HH:mm')

                    .add(duration, 'minutes')

                    .format('DD/MM/YYYY HH:mm');

            },

            minTime1: function() {
                let format = 'HH:mm';
                let d = moment(this.dpicker1).day();

                if (d != 6 && d != 0) {
                    let time = moment(this.tpicker1, format);
                    let rTime = moment('18:00', format);

                    if (time.isBefore(rTime)) {
                        this.tpicker1 = '18:00';
                    }

                    return '18:00';
                }

                //this.tpicker1 = '08:00';
                //console.log("Time1:", this.tpicker1);

                return '00:00';
            },

            minTime2: function() {
                let format = 'HH:mm';
                let d = moment(this.dpicker2).day();

                if (d != 6 && d != 0) {
                    let time = moment(this.tpicker2, format);
                    let rTime = moment('18:00', format);

                    if (time.isBefore(rTime)) {
                        this.tpicker1 = '18:00';
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
                e1: 0,
                color: '#00ADA7',
                checked: false,
                type: 'appel direct',
                types: [
                    { key: 'appel direct', value: 'Appel direct' },
                    { key: 'whatsapp', value: 'WhatsApp' },
                    { key: 'skype', value: 'Skype' },
                ],
                //date: this.rdv != null ? moment(this.rdv.date_debut).format('YYYY-MM-DD') : moment(new Date()).format('YYY-MM-DD'),
                heure_debut: this.rdv != null ? moment(this.rdv.date_debut).format('HH:mm') : moment(new Date()).format('HH:mm'),
                heure_fin: this.rdv != null ? moment(this.rdv.date_fin).format('HH:mm') : moment(new Date()).format('HH:mm'),
                objets: [
                    'Information sur nos services',
                    'Au sujet des rapports médicaux et factures reçus',
                    'Au sujet d’une invitation à un évènement',
                    'Autre sujet',
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
            }
        },

        methods: {
            day1Picked: function(input) {
                //console.log("Day picked:", moment(input).day());
                this.$refs.d1menu.save(this.dpicker1);
            },

            day2Picked: function(input) {
                //console.log("Day picked:", moment(input).day());
                this.$refs.d2menu.save(this.dpicker2);
            },

            d2AllowedDates: function(val) {
                console.log("Value:", val);
                console.log("DPicker1:", this.dpicker1);
                console.log("Result:", new Date(val).getTime() != new Date(this.dpicker1).getTime());
                return new Date(val).getTime() != new Date(this.dpicker1).getTime();
            },

            time1Picked: function(input) {
                this.$refs.t1menu.save(this.tpicker1);
            },

            time2Picked: function(input) {
                this.$refs.t2menu.save(this.tpicker2);
            },

            dateClicked(event) {
                //console.log("Date event:", event);

                Vue.notify({
                    type: 'error',
                    text: 'Please select specific time'
                });
            },

            dayClicked(event) {
                //console.log("Day event:", event);

                Vue.notify({
                    type: 'error',
                    text: 'Please select specific time'
                });
            },

            timeClicked(event) {
                //console.log("Time event:", event);

                this.date = event.date;
                this.heure_debut = event.time;

                console.log("Date debut:", this.date_debut);
                console.log("Date fin:", this.date_fin);
            },

            getCountries() {
                let args = {};
                let errorMessages = {
                    generic: this.$i18n.t('message.genericError'),
                    error: this.$i18n.t('message.genericError') // TODO: Prendre message approprié
                };

                this.$store.dispatch('getCountries', { args, errorMessages });
            },

            getAppointment() {
                let args = {
                    rdv: this.$route.params.appointment
                };
                let errorMessages = {
                    generic: this.$i18n.t('message.genericError'),
                    error: this.$i18n.t('message.genericError') // TODO: Prendre message approprié
                };

                this.$store.dispatch('getAppointment', { args, errorMessages });
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

            goToStep2() {
                if (this.date_debut1 == '' || this.date_debut2 == '') {
                    Vue.notify({
                        type: 'error',
                        text: this.$i18n.t('message.pickAtLeastTwoDates')
                    });
                } else if(this.$refs.step1.validate()) {
                    this.e1 = 2;
                }
            },

            submit() {
                if (this.$refs.step2.validate()) {
                    // Check if at least a whatsapp number, phone number or skype ID was submitted
                    if ((this.mRdv.whatsapp == null || this.mRdv.whatsapp == '')
                        && (this.mRdv.numero == null || this.mRdv.numero == '')
                        && (this.mRdv.skype == null || this.mRdv.skype == '')) {
                        Vue.notify({
                            type: 'error',
                            text: this.$i18n.t('message.enterAtLeastOneNumber')
                        });
                    } else {
                        // Submit to server
                        let args = {
                            rdv: this.$route.params.appointment,
                            pays: this.mRdv.pays,
                            style: this.mRdv.style,
                            date_debut1: this.date_debut1,
                            date_debut2: this.date_debut2,
                            date_fin1: this.date_fin1,
                            date_fin2: this.date_fin2,
                            objet: this.mRdv.objet,
                            nom: this.mRdv.nom,
                            email: this.mRdv.email,
                            whatsapp: this.mRdv.whatsapp,
                            numero: this.mRdv.telephone,
                            skype: this.mRdv.skype
                        };

                        console.log("Args:", args);

                        let successMessage = this.$i18n.t('message.appointmentUpdated');
                        let errorMessages = {
                            generic: this.$i18n.t('message.genericError'),
                            error: this.$i18n.t('message.genericError') // TODO: Prendre message approprié
                        };

                        this.$store.dispatch('updateAppointment', { args, errorMessages, successMessage });
                    }
                }
            },

            open (event) {
                //alert(event.title)
            }
        },

        mounted() {
            // Récupérer le RDV
            this.getAppointment();

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
    .sv-container {
        font-size: 1.2em;
        width: 80%;
    }

    .label {
        color: #00ADA7;
        margin-bottom: 0;
    }

    .my-event {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        border-radius: 2px;
        background-color: #00ADA7;
        color: #ffffff;
        border: 1px solid #00ADA7;
        font-size: 12px;
        padding: 3px;
        cursor: pointer;
        margin-bottom: 1px;
        left: 4px;
        margin-right: 8px;
        position: relative;
    }

    .my-event.with-time {
        position: absolute;
        right: 4px;
        margin-right: 0;
    }

    @media only screen and (min-width: 768px) {
        .sv-container {
            width: 75%;
        }
    }
</style>
