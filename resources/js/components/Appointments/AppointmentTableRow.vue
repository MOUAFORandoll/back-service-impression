<template>
    <tr>
        <v-list>
            <v-list-group no-action>
                <template slot="activator">
                    <v-list-tile>
                        <v-list-tile-content>
                            <v-list-tile-title>
                                {{ date }} ({{ rdvs.length }})
                            </v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>
                </template>

                <v-list-tile>
                    <v-list-tile-content>
                        <v-list-tile-title>
                            <v-layout row wrap class="font-weight-bold">
                                <v-flex xs12 sm2>
                                    {{ $t('message.email') }}
                                </v-flex>

                                <v-flex xs12 sm2>
                                    {{ $t('message.name') }}
                                </v-flex>

                                <v-flex xs12 sm2>
                                    {{ $tc('message.dates', 1) }}
                                </v-flex>

                                <v-flex xs12 sm2>
                                    {{ $tc('message.types', 1) }}
                                </v-flex>

                                <v-flex xs12 sm2>
                                    {{ $t('message.status') }}
                                </v-flex>

                                <v-flex xs12 sm2>
                                    {{ $tc('message.actions', 2) }}
                                </v-flex>
                            </v-layout>
                        </v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>

                <v-list-tile
                        v-for="item in rdvs"
                        :key="item.id"
                        @click=""
                >
                    <v-list-tile-content>
                        <v-list-tile-title>
                            <v-layout row wrap>
                                <v-flex xs12 sm2>
                                    <a :href="'mailto:' + item.email">
                                        {{ item.email }}
                                    </a>
                                </v-flex>

                                <v-flex xs12 sm2>
                                    {{ item.nom }}
                                </v-flex>

                                <v-flex xs12 sm2>
                                    {{ range(item) }}
                                </v-flex>

                                <v-flex xs12 sm2>
                                    {{ item.style }}
                                </v-flex>

                                <v-flex xs12 sm2>
                                    {{ item.statut != null ? item.statut : '' }}
                                </v-flex>

                                <v-flex xs12 sm2>
                                    <v-layout row wrap>
                                        <v-flex xs4>
                                            <v-btn
                                                    dark
                                                    icon
                                                    class="sn-btn primary"
                                                    :to="{ path: 'appointments/' + item.id + '/edit' }"
                                                    flat
                                            >
                                                <v-icon>fas fa-edit</v-icon>
                                            </v-btn>
                                        </v-flex>

                                        <v-flex xs4>
                                            <v-dialog
                                                    v-model="deleteDialog"
                                                    width="500"
                                            >
                                                <template slot="activator">
                                                    <v-btn
                                                            dark
                                                            icon
                                                            class="sn-btn error"
                                                            flat
                                                    >
                                                        <v-icon>fas fa-trash</v-icon>
                                                    </v-btn>
                                                </template>

                                                <v-card>
                                                    <v-card-title
                                                            dark
                                                            class="headline red white--text"
                                                            primary-title
                                                    >
                                                        {{ $t('message.delete') }} {{ $tc('message.appointments', 1) }}

                                                        <v-spacer></v-spacer>

                                                        <v-btn icon class="white--text" @click="deleteDialog = false">
                                                            <v-icon>fas fa-close</v-icon>
                                                        </v-btn>
                                                    </v-card-title>

                                                    <v-card-text>
                                                        {{ $t('message.delete') }} {{ item.nom }}
                                                    </v-card-text>

                                                    <v-divider></v-divider>

                                                    <v-card-actions>
                                                        <v-spacer></v-spacer>

                                                        <v-btn
                                                                dark
                                                                class="red"
                                                                flat
                                                                @click="deleteRdv(item.id)"
                                                        >
                                                            {{ $t('message.delete') }}
                                                        </v-btn>

                                                        <v-btn
                                                                dark
                                                                class="secondary"
                                                                flat
                                                                @click="deleteDialog = false"
                                                        >
                                                            {{ $t('message.cancel') }}
                                                        </v-btn>
                                                    </v-card-actions>
                                                </v-card>
                                            </v-dialog>
                                        </v-flex>
                                    </v-layout>
                                </v-flex>
                            </v-layout>
                        </v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
            </v-list-group>
        </v-list>
    </tr>
</template>

<script>
    import moment from 'moment';

    export default {
        name: "AppointmentTableRow",

        props: ["rdvs", "date"],

        data() {
            return {
                deleteDialog: false,
            }
        },

        methods: {
            range(rdv) {
                console.log("RDV:", rdv);

                let d1 = moment(rdv.date_debut1).format('HH:mm');
                let d2 = moment(rdv.date_fin1).format('HH:mm');

                return d1 + ' - ' + d2;
            },

            deleteRdv(rdv) {
                let self = this;

                let args = {
                    rdv: rdv
                };

                let index = this.rdvs.indexOf(this.rdv);

                let successMessage = this.$i18n.t('message.appointmentDeleted');
                let errorMessages = {
                    generic: this.$i18n.t('message.genericError'),
                    error: this.$i18n.t('message.error')
                };

                this.$store.dispatch('deleteAppointment', { args, index, successMessage, errorMessages })
                    .then(() => {
                        self.deleteDialog = false;
                    });
            }
        }

    }
</script>

<style scoped>

</style>
