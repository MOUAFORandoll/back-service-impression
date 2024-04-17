<template>
    <div class="card border-light">
        <div class="card-body p-1em">
            <h3 class="card-title text-center">
                {{ $tc('message.contracts', 2) }}
            </h3>

            <div class="card-title">
                <router-link :to="{ name: 'add-contract' }">
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
                        aria-controls="contracts-table"
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
                        id="contracts-table"
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
                        :items="mContracts"
                >
                    <!-- A virtual composite column for actions -->
                    <template slot="action" slot-scope="data">
                        <div class="row">
                            <div class="col-sm-6">
                                <b-link :to="{ name: 'edit-contract', params: { contract: data.item.id } }">
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
                                :title="$t('message.delete') + ' ' + $tc('message.contracts', 1)"
                                hide-footer
                        >
                            <div class="d-block text-center">
                                <h3>{{ $t('message.delete') }} {{ data.item.nom }}?</h3>
                            </div>

                            <div class="d-block float-right">
                                <b-button class="secondary" @click="deleteContract(data.item.id, data.index)">
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
                        aria-controls="contracts-table"
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
    import ContractTableRow from "../../../components/Contracts/ContractTableRow";
    import moment from 'moment';

    export default {
        name: "ContractList",

        computed: {
            ...mapGetters(["contracts"]),

            mContracts: function() {
                let cArray = [];

                _.forEach(this.contracts, function(contract) {
                    let c = {};

                    c.nom = contract.nomS;
                    c.email = contract.emailS1;
                    c.telephone = contract.telephoneS1;
                    c.pays = contract.paysSouscription;
                    c.date = moment(contract.created_at).format('DD/MM/YYYY HH:mm');
                    c.id = contract.id;

                    cArray.push(c);
                });

                return cArray;
            },

            rows: function() {
                return this.mContracts.length;
            }
        },

        components: { ContractTableRow },

        data() {
            return {
                perPage: 10,
                currentPage: 1,
                sortBy: 'date',
                sortDesc: true,
                fields: [
                    {
                        key: 'nom',
                        label: this.$i18n.t('message.name'),
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
                        key: 'pays',
                        label: this.$i18n.tc('message.countries', 1),
                    },
                    {
                        key: 'date',
                        label: this.$i18n.tc('message.dates', 1),
                        sortable: true
                    },
                    {
                        key: 'action',
                        label: this.$i18n.tc('message.operations', 1)
                    }
                ],

                headers: [
                    {
                        text: this.$i18n.t('message.name'),
                        align: 'left',
                        sortable: false,
                        value: 'name'
                    },
                    {
                        text: this.$i18n.t('message.email'),
                        value: 'email'
                    },
                    {
                        text: this.$i18n.t('message.phoneNumber'),
                        value: 'telephone'
                    },
                    {
                        text: this.$i18n.tc('message.countries', 1),
                        value: 'pays'
                    },
                    {
                        text: this.$i18n.t('message.createdAt'),
                        value: 'created_at'
                    },
                    {
                        text: this.$i18n.tc('message.operations', 2),
                        value: 'operations'
                    }
                ],
                offset: 0,
                limit: -1,
            }
        },

        methods: {
            getContracts() {
                let args = {
                    offset: this.offset,
                    limit: this.limit
                };

                this.$store.dispatch('getContracts', { args : args });
            },

            rowSelected(items) {
                this.$router.push({ name: 'edit-contract', params: { contract: items[0].id } });
            },

            deleteContract(contract, index) {
                let self = this;

                let args = {
                    contract: contract
                };

                let successMessage = this.$i18n.t('message.contractDeleted');
                let errorMessages = {
                    generic: this.$i18n.t('message.genericError'),
                    error: this.$i18n.t('message.error')
                };

                this.$store.dispatch('deleteContract', { args, index, successMessage, errorMessages })
                    .then(() => {
                        self.$bvModal.hide('delete-modal-' + contract);
                    });
            }
        },

        mounted() {
            // Fetch contract list
            this.getContracts();
        }
    }
</script>

<style scoped>

</style>
