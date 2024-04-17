<template>
    <tr>
        <td>
            {{ partnerName }}
        </td>

        <td class="text-xs-right">
            <a :href="'mailto:' + partner.email">
                {{ partner.email }}
            </a>
        </td>
        <td class="text-xs-right">
            {{ partner.telephone }}
        </td>
        <td class="text-xs-right">
            {{ partner.pays }}
        </td>
        <td class="text-xs-right">
            {{ partner.created_at }}
        </td>

        <td class="text-xs-right">
            <v-layout>
                <v-flex xs4>
                    <v-btn
                            dark
                            icon
                            class="sn-btn primary"
                            :to="{ path: 'partners/' + partner.id + '/edit' }"
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
                                {{ $t('message.delete') }} {{ $tc('message.partners', 1) }}

                                <v-spacer></v-spacer>

                                <v-btn icon class="white--text" @click="deleteDialog = false">
                                    <v-icon>fas fa-close</v-icon>
                                </v-btn>
                            </v-card-title>

                            <v-card-text>
                                {{ $t('message.delete') }} {{ partnerName }}
                            </v-card-text>

                            <v-divider></v-divider>

                            <v-card-actions>
                                <v-spacer></v-spacer>

                                <v-btn
                                        dark
                                        class="red"
                                        flat
                                        @click="deletePartner"
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
        </td>
    </tr>
</template>

<script>
    export default {
        name: "PartnerTableRow",

        props: ["partners", "partner"],

        data() {
            return {
                deleteDialog: false,
                partnerName: this.partner.nom + ' ' + this.partner.prenom
            }
        },

        methods: {
            deletePartner() {
                let self = this;

                let args = {
                    partenaire: this.partner.id
                };

                let index = this.partners.indexOf(this.partner);

                let successMessage = this.$i18n.t('message.partnerDeleted');
                let errorMessages = {
                    generic: this.$i18n.t('message.genericError'),
                    error: this.$i18n.t('message.error')
                };

                this.$store.dispatch('deletePartner', { args, index, successMessage, errorMessages })
                    .then(() => {
                        self.deleteDialog = false;
                    });
            }
        },

        mounted() {
            //
        }
    }
</script>

<style scoped>
    .sn-btn {
        margin: 10px;
    }
</style>
