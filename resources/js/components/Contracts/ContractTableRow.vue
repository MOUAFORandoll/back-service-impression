<template>
    <tr>
        <td>
            {{ contractName }}
        </td>

        <td class="text-xs-right">
            <a :href="'mailto:' + contract.emailS1">
                {{ contract.emailS1 }}
            </a>
        </td>
        <td class="text-xs-right">
            {{ contract.telephoneS1 }}
        </td>
        <td class="text-xs-right">
            {{ contract.paysS }}
        </td>
        <td class="text-xs-right">
            {{ contract.created_at }}
        </td>

        <td class="text-xs-right">
            <v-layout>
                <v-flex xs4>
                    <v-btn
                            dark
                            icon
                            class="sn-btn primary"
                            :to="{ path: 'contracts/' + contract.id + '/edit' }"
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
                                {{ $t('message.delete') }} {{ $tc('message.contracts', 1) }}

                                <v-spacer></v-spacer>

                                <v-btn icon class="white--text" @click="deleteDialog = false">
                                    <v-icon>fas fa-close</v-icon>
                                </v-btn>
                            </v-card-title>

                            <v-card-text>
                                {{ $t('message.delete') }} {{ contractName }}
                            </v-card-text>

                            <v-divider></v-divider>

                            <v-card-actions>
                                <v-spacer></v-spacer>

                                <v-btn
                                        dark
                                        class="red"
                                        flat
                                        @click="deleteContract"
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
        name: "ContractTableRow",

        props: ["contracts", "contract"],

        data() {
            return {
                deleteDialog: false,
                contractName: this.contract.nomS
            }
        },

        methods: {
            deleteContract() {
                let self = this;

                let args = {
                    contract: this.contract.id
                };

                let index = this.contracts.indexOf(this.contract);

                let successMessage = this.$i18n.t('message.contractDeleted');
                let errorMessages = {
                    generic: this.$i18n.t('message.genericError'),
                    error: this.$i18n.t('message.error')
                };

                this.$store.dispatch('deleteContract', { args, index, successMessage, errorMessages })
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