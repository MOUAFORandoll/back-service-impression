<template>
    <nav>
        <v-toolbar app dark class="primary">
            <v-toolbar-side-icon @click="showDrawer = !showDrawer"></v-toolbar-side-icon>

            <!--v-avatar>
                <img :src="logo" alt="avatar">
            </v-avatar>

            <v-toolbar-title class="headline">
                <router-link class="toolbar-title" :to="{ name: 'home' }">
                    {{ appName }}
                </router-link>
            </v-toolbar-title-->

            <v-spacer></v-spacer>

            <v-toolbar-items>
                <v-btn href="/home" flat>
                    <span class="hidden-sm-and-down">
                        {{ $t('message.home') }}
                    </span>

                    <v-icon left>fas fa-home</v-icon>
                </v-btn>

                <v-btn href="/partenaire/home" flat>
                    <span class="hidden-sm-and-down">
                        {{ $t('message.home') }} - {{ $tc('message.partners', 1) }}
                    </span>
                    
                    <v-icon left>fas fa-user</v-icon>
                </v-btn>

                <v-btn flat @click="logout">
                    <span class="hidden-sm-and-down">
                        {{ $t('message.logout') }}
                    </span>

                    <v-icon right>fas fa-sign-out-alt</v-icon>
                </v-btn>
            </v-toolbar-items>
        </v-toolbar>

        <v-navigation-drawer
                v-model="showDrawer"
                :clipped="$vuetify.breakpoint.xl"
                fixed
                app
        >
            <v-toolbar>
                <v-list class="pa-0">
                    <v-list-tile avatar :to="{ name: 'profile' }">
                        <v-list-tile-avatar>
                            <!--img v-if="user.avatar" :src="'/public/storage/' + user.avatar"-->

                            <img :src="baseURL + '/public/storage/users/default.png'">
                        </v-list-tile-avatar>

                        <v-list-tile-content>
                            <v-list-tile-title>
                                <!--{{ user.firstname }} {{ user.name }}-->
                                {{ $t('message.firstName') }} {{ $t('message.lastName') }}
                            </v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>
                </v-list>
            </v-toolbar>

            <v-list class="pt-0" dense>
                <template v-for="item in items">
                    <v-list-tile
                        v-if="!item.heading"
                        :key="item.title"
                        :to="{ name: item.route }"
                        exact
                        row
                        align-center
                    >
                        <v-list-tile-action>
                            <v-icon>{{ item.icon }}</v-icon>
                        </v-list-tile-action>

                        <v-list-tile-content>
                            <v-list-tile-title>
                                {{ item.title }}
                            </v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>

                    <v-list-group
                            v-else-if="item.subs"
                            :key="item.title"
                            v-model="item.model"
                            :prepend-icon="item.model ? item.icon : item['icon-alt']"
                            append-icon=""
                    >
                        <template slot="activator">
                            <v-list-tile>
                                <v-list-tile-content>
                                    <v-list-tile-title>
                                        {{ item.title }}
                                    </v-list-tile-title>
                                </v-list-tile-content>
                            </v-list-tile>
                        </template>

                        <v-list-tile
                                v-for="(child, i) in item.subs"
                                :key="i"
                                @click=""
                                :to="{ name: child.route }"
                                exact
                        >
                            <v-list-tile-action>
                                <v-icon>{{ child.icon }}</v-icon>
                            </v-list-tile-action>

                            <v-list-tile-content>
                                <v-list-tile-title>
                                    {{ child.title }}
                                </v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>
                    </v-list-group>
                </template>
            </v-list>
        </v-navigation-drawer>
    </nav>
</template>

<script>
    import AppConfig from '../../constants/AppConfig';
    import Vue from 'vue';

    export default {
        name: "DashboardHeader",

        data() {
            return {
                appName: AppConfig.brandName,
                baseURL: AppConfig.baseUrl,
                logo: AppConfig.brandLogo,
                showDrawer: true,
                //user: JSON.parse(localStorage.getItem('user')),
                items: [
                    {
                        title: this.$i18n.t('message.home'),
                        icon: 'dashboard',
                        route: 'admin',
                        heading: false
                    },
                    {
                        title: this.$i18n.tc('message.users', 2),
                        //icon: 'fas fa-caret-up',
                        //'icon-alt': 'fas fa-caret-down',
                        //model: false,
                        //route: '#',
                        //heading: true,
                        icon: 'fas fa-user',
                        route: 'users',
                        heading: false,
                        subs: [
                            {
                                title: this.$i18n.t('message.add'),
                                icon: 'fas fa-plus',
                                route: 'add-user'
                            },
                            {
                                title: this.$i18n.t('message.list'),
                                icon: 'fas fa-user',
                                route: 'users'
                            }
                        ]
                    },
                    {
                        title: this.$i18n.tc('message.contracts', 2),
                        //icon: 'fas fa-caret-up',
                        //'icon-alt': 'fas fa-caret-down',
                        //model: false,
                        //route: '#',
                        //heading: true,
                        icon: 'fas fa-file-signature',
                        route: 'contracts',
                        heading: false,
                        subs: [
                            {
                                title: this.$i18n.t('message.add'),
                                icon: 'fas fa-plus',
                                route: 'add-contract'
                            },
                            {
                                title: this.$i18n.t('message.list'),
                                icon: 'fas fa-file-signature',
                                route: 'contracts'
                            }
                        ]
                    },
                    {
                        title: this.$i18n.tc('message.partners', 2),
                        //icon: 'fas fa-caret-up',
                        //'icon-alt': 'fas fa-caret-down',
                        //model: false,
                        //route: '#',
                        //heading: true,
                        icon: 'fas fa-user',
                        route: 'partners',
                        heading: false,
                        subs: [
                            {
                                title: this.$i18n.t('message.add'),
                                icon: 'fas fa-plus',
                                route: 'add-partner'
                            },
                            {
                                title: this.$i18n.t('message.list'),
                                icon: 'fas fa-user',
                                route: 'partners'
                            }
                        ]
                    },
                    // Appointment
                    {
                        title: this.$i18n.tc('message.appointments', 2),
                        //icon: 'fas fa-caret-up',
                        //'icon-alt': 'fas fa-caret-down',
                        //model: false,
                        //route: '#',
                        //heading: true,
                        icon: 'fas fa-calendar-check',
                        route: 'appointments',
                        heading: false,
                        subs: [
                            {
                                title: this.$i18n.t('message.add'),
                                icon: 'fas fa-plus',
                                route: 'add-appointment'
                            },
                            {
                                title: this.$i18n.t('message.list'),
                                icon: 'fas fa-calendar-check',
                                route: 'appointments'
                            }
                        ]
                    },
                    {
                        title: this.$i18n.t('message.profile'),
                        icon: 'fas fa-user',
                        route: 'profile'
                    }
                ]
            }
        },

        methods: {
            logout() {
                //this.$store.dispatch('logoutHandler', { args: {} });

                try {
                    axios.post(this.baseURL + '/logout')
                        .then(() => {
                            Vue.notify({
                                type: 'success',
                                text: this.$i18n.t('message.logoutSuccess')
                            });

                            // Redirect to home page
                            window.location.href = this.baseURL;
                        })
                        .catch(error => {
                            if (error.response) {
                                // The request was made and the server responded with a status code
                                // that falls out of the range of 2xx
                                console.log('Data:', error.response.data);
                                console.log('Status:', error.response.status);
                                console.log('Headers:', error.response.headers);

                                Vue.notify({
                                    type: 'error',
                                    text: error.response.data.message
                                });
                            } else if (error.request) {
                                // The request was made but no response was received
                                // 'error.request' is an instance of XMLHttpRequest in the browser and an instance of
                                // http.ClientRequest in node.js
                                console.log('Request error:', error.request);

                                Vue.notify({
                                    type: 'error',
                                    text: this.$i18n.t('message.genericError')
                                });
                            } else {
                                // Something happened in setting up the request that triggered an Error
                                console.log('Error:', error.message);

                                Vue.notify({
                                    type: 'error',
                                    text: error.message
                                });
                            }
                        })
                } catch (error) {
                    Vue.notify({
                        type: 'error',
                        text: this.$i18n.t('message.genericError')
                    });
                }
            }
        }
    }
</script>

<style scoped>
    .toolbar-title {
        color: inherit;
        text-decoration: inherit;
    }

    .active {
        color: #FF9E18;
    }
</style>
