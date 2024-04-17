<template>
    <div class="card border-light">
        <div class="card-body p-1em">
            <h3 class="card-title text-center">
                {{ $tc('message.partners', 2) }}
            </h3>

            <div class="card-title">
                <router-link :to="{ name: 'add-partner' }">
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
                        aria-controls="partners-table"
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
                        id="partners-table"
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
                        :items="mPartners"
                >
                    <!-- A virtual composite column for actions -->
                    <template slot="action" slot-scope="data">
                        <div class="row">
                            <div class="col-sm-6">
                                <b-link :to="{ name: 'edit-partner', params: { partner: data.item.id } }">
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
                                :title="$t('message.delete') + ' ' + $tc('message.partners', 1)"
                                hide-footer
                        >
                            <div class="d-block text-center">
                                <h3>{{ $t('message.delete') }} {{ data.item.nom }}?</h3>
                            </div>

                            <div class="d-block float-right">
                                <b-button class="secondary" @click="deletePartner(data.item.id, data.index)">
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
                        aria-controls="partners-table"
                ></b-pagination>
            </template>

            <template v-else>
                <v-flex xs12>
                    <div class="card">
                        <div class="card-body text-xs-center">
                            <p class="card-text">
                                {{ $t('message.noResults') }}
                            </p>
                        </div>
                    </div>
                </v-flex>
            </template>
        </div>
    </div>
</template>

<script>
    import { mapGetters } from 'vuex';
    import PartnerTableRow from "../../../components/Partners/PartnerTableRow";
    import moment from 'moment';

    export default {
        name: "PartnerList",

        computed: {
            ...mapGetters(["partners"]),

            mPartners: function() {
                let pArray = [];

                _.forEach(this.partners, function(partner) {
                    let p = {};

                    p.nom = partner.nom + ' ' + partner.prenom;
                    p.email = partner.email;
                    p.telephone = partner.telephone;
                    p.profession = partner.profession;
                    p.adresse = partner.adresse;
                    p.pays = partner.pays;
                    p.ville = partner.ville;
                    p.date = moment(partner.created_at).format('DD/MM/YYYY HH:mm');
                    p.id = partner.id;

                    pArray.push(p);
                });

                return pArray;
            },

            rows: function() {
                return this.mPartners.length;
            }
        },

        components: { PartnerTableRow },

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
                        key: 'profession',
                        label: this.$i18n.t('message.profession'),
                    },
                    {
                        key: 'adresse',
                        label: this.$i18n.t('message.address'),
                    },
                    {
                        key: 'pays',
                        label: this.$i18n.tc('message.countries', 1),
                    },
                    {
                        key: 'ville',
                        label: this.$i18n.t('message.city'),
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
            getPartners() {
                let args = {
                    offset: this.offset,
                    limit: this.limit
                };

                this.$store.dispatch('getPartners', { args : args });
            },

            rowSelected(items) {
                this.$router.push({ name: 'edit-partner', params: { partner: items[0].id } });
            },

            deletePartner(partner, index) {
                let self = this;

                let args = {
                    partenaire: partner
                };

                let successMessage = this.$i18n.t('message.partnerDeleted');
                let errorMessages = {
                    generic: this.$i18n.t('message.genericError'),
                    error: this.$i18n.t('message.error')
                };

                this.$store.dispatch('deletePartner', { args, index, successMessage, errorMessages })
                    .then(() => {
                        self.$bvModal.hide('delete-modal-' + partner);
                    });
            }
        },

        mounted() {
            // Fetch partner list
            this.getPartners();
        }
    }
</script>

<style scoped>

</style>
