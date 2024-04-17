<template>
    <div class="card border-light">
        <div class="card-body p-1em">
            <h3 class="card-title text-center">
                {{ $tc('message.appointments', 2) }}
            </h3>

            <div class="card-title">
                <router-link :to="{ name: 'add-appointment' }">
                    {{ $t('message.add') }}

                    <i class="fas fa-plus-circle edit-icon"></i>
                </router-link>
            </div>

            <template v-if="rows">
                <b-pagination
                        v-model="currentPage"
                        :total-rows="rows"
                        :per-page="perPage"
                        class="mb-3"
                        aria-controls="rdvs-table"
                ></b-pagination>

                <b-container>
                    <b-row class="justify-content-sm-center">
                        <b-col col sm="6">
                            <b-form-group label-cols-sm="3" :label="$t('message.filter')" class="mb-0">
                                <b-form-select v-model="sortDesc">
                                    <option :value="true">{{ $t('message.latest') }}</option>

                                    <option :value="false">{{ $t('message.oldest') }}</option>
                                </b-form-select>
                            </b-form-group>
                        </b-col>
                    </b-row>
                </b-container>

                <b-table
                        id="rdvs-table"
                        :per-page="perPage"
                        :current-page="currentPage"
                        selectable
                        select-mode="single"
                        borderless
                        responsive
                        striped
                        hover
                        :sort-by.sync="sortBy"
                        :sort-desc.sync="sortDesc"
                        @row-selected="rowSelected"
                        :fields="fields"
                        :items="mRdvs"
                >
                    <!-- A virtual composite column for actions -->
                    <template slot="action" slot-scope="data">
                        <div class="row">
                            <div class="col-sm-6">
                                <b-link :to="{ name: 'edit-appointment', params: { appointment: data.item.id } }">
                                    <i class="fas fa-edit fa-2x edit-icon"></i>
                                </b-link>
                            </div>

                            <div class="col-sm-6">
                                <i v-b-modal="'delete-modal-' + data.item.id" class="fas fa-trash fa-2x delete-icon"></i>
                            </div>
                        </div>

                        <b-modal
                                :id="'delete-modal-' + data.item.id"
                                size="sm"
                                header-bg-variant="danger"
                                header-text-variant="light"
                                :title="$t('message.delete') + ' ' + $tc('message.appointments', 1)"
                                hide-footer
                        >
                            <div class="d-block text-center">
                                <h3>{{ $t('message.delete') }} {{ data.item.nom }}?</h3>
                            </div>

                            <div class="d-block float-right">
                                <b-button class="secondary" @click="deleteAppointment(data.item.id, data.index)">
                                    {{ $t('message.delete') }}
                                </b-button>

                                <b-button class="danger" @click="$bvModal.hide('delete-modal-' + data.item.id)">
                                    {{ $t('message.cancel') }}
                                </b-button>
                            </div>
                        </b-modal>
                    </template>
                </b-table>

                <b-pagination
                        v-model="currentPage"
                        :total-rows="rows"
                        :per-page="perPage"
                        aria-controls="rdvs-table"
                ></b-pagination>
            </template>

            <template v-else>
                <div class="card">
                    <div class="card-body text-xs-center">
                        <p class="card-text">
                            {{ $t('message.noResults') }}
                        </p>
                    </div>
                </div>
            </template>
        </div>
    </div>
</template>

<script>
    import { mapGetters } from 'vuex';
    import AppointmentTableRow from '../../../components/Appointments/AppointmentTableRow';
    import lodash from 'lodash';
    import Vue from 'vue';
    import moment from 'moment';

    export default {
        name: "AppointmentList",
        components: { AppointmentTableRow },
        data () {
            return {
                perPage: 10,
                currentPage: 1,
                sortBy: 'date',
                sortDesc: true,
                type: 'month',
                start: moment(new Date()).format('YYYY-MM-DD HH:mm'),
                end: '2020-06-10',
                typeOptions: [
                    { text: 'Day', value: 'day' },
                    { text: '4 Day', value: '4day' },
                    { text: 'Week', value: 'week' },
                    { text: 'Month', value: 'month' }
                ],
                events : [
                    {
                        title: 'Weekly Meeting',
                        date: '2019-06-18',
                        // time: '09:00',
                        duration: 45,
                        details: 'Going to the beach!',
                        open: false
                    },
                    {
                        title: 'Thomas\'s Birthday',
                        date: '2019-06-20',
                        details: 'Going to the beach!',
                        open: false
                    },
                    {
                        title: 'Mash Potatoes',
                        date: '2019-06-25',
                        // time: '12:30',
                        duration: 180,
                        details: 'Going to the beach!',
                        open: false
                    }
                ],
                dialog: false,
                fields: [
                    {
                        key: 'nom',
                        label: this.$i18n.t('message.name'),
                    },
                    {
                        key: 'objet',
                        label: this.$i18n.t('message.subject'),
                    },
                    {
                        key: 'email',
                        label: this.$i18n.t('message.email'),
                    },
                    {
                        key: 'telephone',
                        label: this.$i18n.t('message.phoneNumber'),
                    },
                    {
                        key: 'type',
                        label: this.$i18n.tc('message.types', 1),
                    },
                    {
                        key: 'pays',
                        label: this.$i18n.tc('message.countries', 1),
                    },
                    {
                        key: 'date1',
                        label: this.$i18n.tc('message.dates', 1) + ' 1',
                    },
                    {
                        key: 'date2',
                        label: this.$i18n.tc('message.dates', 1) + ' 2',
                    },
                    {
                        key: 'date',
                        label: this.$i18n.t('message.createdAt'),
                        sortable: true
                    },
                    {
                        key: 'action',
                        label: this.$i18n.tc('message.operations', 1)
                    }
                ]
            }
        },
        computed: {
            ...mapGetters(["rdvs"]),

            mRdvs: function() {
                let rArray = [];

                _.forEach(this.rdvs, function(rdv) {
                    let r = {};

                    r.id = rdv.id;
                    r.nom = rdv.nom;
                    r.objet = rdv.objet;
                    r.email = rdv.email;
                    r.telephone = rdv.telephone;
                    r.type = rdv.style;
                    r.pays = rdv.pays;
                    r.date = moment(rdv.created_at).format('DD/MM/YYYY HH:mm');
                    r.date1 = moment(rdv.date_debut1).format('DD/MM/YYYY HH:mm') + ' - ' + moment(rdv.date_fin1).format('DD/MM/YYYY HH:mm');
                    r.date2 = rdv.date_debut2 != null && rdv.date_debut2 != '' ? moment(rdv.date_debut2).format('DD/MM/YYYY HH:mm') + ' - ' + moment(rdv.date_fin2).format('DD/MM/YYYY HH:mm') : '';

                    rArray.push(r);
                });

                return rArray;
            },

            rows: function() {
                return this.mRdvs.length;
            },

            items: function() {
                console.log("RDVs:", this.rdvs);

                let newRdvs = this.rdvs;

                _.forEach(newRdvs, function(value) {
                    console.log("Value:", value);
                    value.date = moment(value.date_debut).format('YYYY-MM-DD');
                });

                let result = _.chain(newRdvs)
                    .groupBy('date')
                    .toPairs()
                    .map(function(r) {
                        return _.fromPairs(_.zip(["date", "rdvs"], r));
                    })
                    .value();

                console.log("Sorted RDVs:", result);

                return result;
            },

            // convert the list of events into a map of lists keyed by date
            eventsMap () {
                const map = {}
                this.events.forEach(e => (map[e.date] = map[e.date] || []).push(e))
                return map
            }
        },
        mounted () {
            //this.$refs.calendar.scrollToTime('08:00');

            this.getAppointments();
        },
        methods: {
            open (event) {
                alert(event.title)
            },
            dateSelected(event){
                console.log("Date:", event)
                this.dialog = true;
            },
            daySelected(event){
                console.log("Day:",event);
                // this.dialog = true;
            },
            datePicked(date) {
                let picked = false;
                let d1 = moment(date).format('YYYY-MM-DD');

                // Check if date is in rdvs array
                _.forEach(this.rdvs, function(value) {
                    let d2 = moment(value.date_debut).format('YYYY-MM-DD');

                    /*console.log("Date 1:", date);
                    console.log("Date 2:", value.date_debut);
                    console.log("Equal?", date == d2);*/

                    if (d1 == d2) {
                        picked = true
                    }
                });

                console.log("Picked:", picked);

                return picked;
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

            rowSelected(items) {
                this.$router.push({ name: 'edit-appointment', params: { appointment: items[0].id } });
            },

            deleteAppointment(rdv, index) {
                let self = this;

                let args = {
                    rdv: rdv
                };

                let successMessage = this.$i18n.t('message.appointmentDeleted');
                let errorMessages = {
                    generic: this.$i18n.t('message.genericError'),
                    error: this.$i18n.t('message.error')
                };

                this.$store.dispatch('deleteAppointment', { args, index, successMessage, errorMessages })
                    .then(() => {
                        self.$bvModal.hide('delete-modal-' + rdv);
                    });
            }
        }
    }
</script>

<style scoped>

    .my-event {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        border-radius: 2px;
        background-color: #00ADA7;
        color: #ffffff;
        border: 1px solid #00ADA7;
        width: 100%;
        font-size: 12px;
        padding: 3px;
        cursor: pointer;
        margin-bottom: 1px;
    }

</style>
