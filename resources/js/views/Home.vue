<template>
    <v-container pa-0 class="home">
        <v-layout
                align-center
                column
                justify-center
        >
            <v-card dark>
                <v-container
                        fluid
                        grid-list-lg
                >
                    <v-layout row wrap>
                        <v-flex sm5>
                            <h1 class="display-2 font-weight-thin mb-3">
                                {{ $t('message.homeHeading1') }}
                            </h1>

                            <h4 class="subheading">
                                {{ $t('message.homeHeading2') }}
                            </h4>
                        </v-flex>

                        <v-flex sm7>
                            <v-container fluid>
                                <h2 headline>
                                    {{ $t('message.bookToday') }}
                                </h2>
                            </v-container>

                            <v-form v-model="valid">
                                <v-container fluid grid-list-xl>
                                    <v-layout wrap align-center>
                                        <v-flex
                                                xs12
                                                d-flex
                                        >
                                            <v-select
                                                    v-model="pickupLocation"
                                                    name="pickupLocation"
                                                    dark
                                                    color="teal darken-4"
                                                    :items="zones"
                                                    item-text="name"
                                                    item-value="id"
                                                    :hint="$t('message.pickupLocation')"
                                                    :label="$t('message.pickupLocation')"
                                                    outline
                                            ></v-select>
                                        </v-flex>

                                        <v-flex
                                                xs12
                                                sm6
                                                d-flex
                                        >
                                            <v-menu
                                                    v-model="pickupMenu"
                                                    :close-on-content-click="false"
                                                    full-width
                                                    max-width="290"
                                            >
                                                <template slot="activator">
                                                    <v-text-field
                                                            dark
                                                            color="teal darken-4"
                                                            :value="computedPickupDate"
                                                            clearable
                                                            :label="$t('message.pickupDay')"
                                                            readonly
                                                            outline
                                                    ></v-text-field>
                                                </template>

                                                <v-date-picker
                                                        color="teal darken-4"
                                                        :min="today"
                                                        v-model="pickupDate"
                                                        @change="pickupMenu = false"
                                                ></v-date-picker>
                                            </v-menu>
                                        </v-flex>

                                        <v-flex
                                                xs12
                                                sm6
                                                d-flex
                                        >
                                            <v-select
                                                    v-model="pickupTime"
                                                    dark
                                                    color="teal darken-4"
                                                    :items="times"
                                                    :hint="$t('message.pickupTime')"
                                                    :label="$t('message.pickupTime')"
                                                    outline
                                            ></v-select>
                                        </v-flex>
                                    </v-layout>

                                    <v-layout wrap align-center>
                                        <v-flex
                                                xs12
                                                d-flex
                                        >
                                            <v-select
                                                    v-model="dropOffLocation"
                                                    name="dropOffLocation"
                                                    dark
                                                    color="teal darken-4"
                                                    :items="zones"
                                                    item-text="name"
                                                    item-value="id"
                                                    :hint="$t('message.dropOffLocation')"
                                                    :label="$t('message.dropOffLocation')"
                                                    outline
                                            ></v-select>
                                        </v-flex>

                                        <v-flex
                                                xs12
                                                sm6
                                                d-flex
                                        >
                                            <v-menu
                                                    v-model="dropOffMenu"
                                                    :close-on-content-click="false"
                                                    full-width
                                                    max-width="290"
                                            >
                                                <template slot="activator">
                                                    <v-text-field
                                                            dark
                                                            color="teal darken-4"
                                                            :value="computedDropOffDate"
                                                            clearable
                                                            :label="$t('message.dropOffDay')"
                                                            readonly
                                                            outline
                                                    ></v-text-field>
                                                </template>

                                                <v-date-picker
                                                        color="teal darken-4"
                                                        :min="today"
                                                        v-model="dropOffDate"
                                                        @change="dropOffMenu = false"
                                                ></v-date-picker>
                                            </v-menu>
                                        </v-flex>

                                        <v-flex
                                                xs12
                                                sm6
                                                d-flex
                                        >
                                            <v-select
                                                    v-model="dropOffTime"
                                                    dark
                                                    color="teal darken-4"
                                                    :items="times"
                                                    :hint="$t('message.dropOffTime')"
                                                    :label="$t('message.dropOffTime')"
                                                    outline
                                            ></v-select>
                                        </v-flex>
                                    </v-layout>

                                    <v-btn dark round large class="teal darken-4" @click="search">
                                        {{ $t('message.search') }}
                                    </v-btn>
                                </v-container>
                            </v-form>
                        </v-flex>
                    </v-layout>
                </v-container>
            </v-card>
        </v-layout>
    </v-container>
</template>

<script>
    import moment from 'moment';
    import { mapGetters } from 'vuex';

    export default {
        name: "Home",

        data() {
            return {
                valid: false,
                pickupLocation: {},
                pickupMenu: false,
                pickupDate: new Date().toISOString().substr(0, 10),
                pickupMonth: '',
                pickupTime: '',
                dropOffLocation: {},
                dropOffMenu: false,
                dropOffDate: new Date().toISOString().substr(0, 10),
                dropOffMonth: '',
                dropOffTime: '',
                today: new Date().toISOString().substr(0, 10),
                times: [
                    '00:00', '00:30', '01:00', '01:30', '02:00', '02:30', '03:00', '03:30', '04:00', '04:30', '05:00', '05:30', '06:00', '06:30',
                    '07:00', '07:30', '08:00', '08:30', '09:00', '09:30', '10:00', '10:30', '11:00', '11:30', '12:00', '12:30', '13:00', '13:30',
                    '14:00', '14:30', '15:00', '15:30', '16:00', '16:30', '17:00', '17:30', '18:00', '18:30', '19:00', '19:30', '20:00', '20:30',
                    '21:00', '21:30', '22:00', '22:30', '23:00', '23:30'
                ],
            }
        },

        computed: {
            ...mapGetters(["zones", "selectedLocale"]),

            computedPickupDate () {
                // Set moment.js locale
                moment.locale(this.selectedLocale.locale);

                return this.pickupDate ? moment(this.pickupDate).format('dddd, Do MMMM YYYY') : ''
            },

            computedDropOffDate () {
                // Set moment.js locale
                moment.locale(this.selectedLocale.locale);

                return this.dropOffDate ? moment(this.dropOffDate).format('dddd, Do MMMM YYYY') : ''
            }
        },

        methods: {
            search() {
                const args = {
                    pickup_location: this.pickupLocation,
                    pickup_date: this.pickupDate,
                    pickup_time: this.pickupTime,
                    dropoff_location: this.dropOffLocation,
                    dropoff_date: this.dropOffDate,
                    dropoff_time: this.dropOffTime
                };

                this.$store.dispatch('leasedVehicles', { args: args });
            }
        },

        mounted() {
            // Retrieve zones
            this.$store.dispatch('getZones', { args: {} });
        }
    }
</script>

<style scoped>

</style>