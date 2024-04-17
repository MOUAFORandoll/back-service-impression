<template>
    <tr>
        <td>
            {{ userName }}
        </td>

        <td class="text-xs-right">
            {{ userOffre }}
        </td>

        <td class="text-xs-right">
            <a :href="'mailto:' + user.email">
                {{ user.email }}
            </a>
        </td>

        <td class="text-xs-right">
            {{ user.telephone }}
        </td>

        <td class="text-xs-right">
            {{ user.pays }}
        </td>

        <td class="text-xs-right">
            {{ user.created_at }}
        </td>

        <td class="text-xs-right">
            <template v-for="(role, key) in roles">
                {{ role.name }}<span v-if="key < (roles.length - 1)">,</span>
            </template>
        </td>

        <td class="text-xs-right">
            <v-layout>
                <v-flex xs4>
                    <v-btn
                            dark
                            icon
                            class="sn-btn primary"
                            :to="{ path: 'users/' + user.id + '/edit' }"
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
                                {{ $t('message.delete') }} {{ $tc('message.users', 1) }}

                                <v-spacer></v-spacer>

                                <v-btn icon class="white--text" @click="deleteDialog = false">
                                    <v-icon>fas fa-close</v-icon>
                                </v-btn>
                            </v-card-title>

                            <v-card-text>
                                {{ $t('message.delete') }} {{ userName }}
                            </v-card-text>

                            <v-divider></v-divider>

                            <v-card-actions>
                                <v-spacer></v-spacer>

                                <v-btn
                                        dark
                                        class="red"
                                        flat
                                        @click="deleteUser"
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
    import { apiModel, makeApiRequest } from "../../api";

    export default {
        name: "UserTableRow",

        props: ["users", "user"],

        computed: {
            userOffre: function() {
                if (this.user.offre != null && this.user.offre != "")
                    return this.$i18n.t('message.offerList.' + this.user.offre);

                return "";
            }
        },

        data() {
            return {
                deleteDialog: false,
                userName: this.user.name + ' ' + this.user.firstname,
                roles: []
            }
        },

        methods: {
            getRoles() {
                let self = this;
                let args = {
                    user: this.user.id
                };

                function successCallback(response) {
                    self.roles = response.data.roles;
                }

                function errorCallback(error) {
                    console.log("Error:", error);
                }

                const localToken = localStorage.getItem('ms-token');

                makeApiRequest(args, apiModel.User.Roles, localToken, successCallback, errorCallback, {});
            },

            deleteUser() {
                let self = this;

                let args = {
                    user: this.user.id
                };

                let index = this.users.indexOf(this.user);

                let successMessage = this.$i18n.t('message.userDeleted');
                let errorMessages = {
                    generic: this.$i18n.t('message.genericError'),
                    error: this.$i18n.t('message.error')
                };

                this.$store.dispatch('deleteUser', { args, index, successMessage, errorMessages })
                    .then(() => {
                        self.deleteDialog = false;
                    });
            }
        },

        mounted() {
            // Récupérer les rôles de l'utilisateur
            this.getRoles();
        }
    }
</script>

<style scoped>
    .sn-btn {
        margin: 10px;
    }
</style>
