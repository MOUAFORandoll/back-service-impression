<template>
    <v-toolbar app dark scroll-off-screen class="primary">
        <v-avatar>
            <img :src="baseUrl + logo" alt="logo">
        </v-avatar>

        <!--v-toolbar-title class="headline">
            <router-link class="toolbar-title" :to="{ name: 'home' }">
                {{ appName }}
            </router-link>
        </v-toolbar-title-->

        <v-spacer></v-spacer>

        <v-toolbar-items class="hidden-sm-and-down">
            <v-btn flat :to="{ name: 'home' }" exact>
                {{ $t('message.Home')}}
            </v-btn>

            <v-btn flat :to="{ name: 'about' }">
                {{ $t('message.About')}}
            </v-btn>

            <v-btn flat :to="{ name: 'contact' }">
                {{ $t('message.Contact')}}
            </v-btn>

            <template v-if="!loggedIn">
                <v-btn flat :to="{ name: 'login' }">
                    {{ $t('message.login')}}
                </v-btn>

                <v-btn flat :to="{ name: 'register' }">
                    {{ $t('message.register')}}
                </v-btn>
            </template>

            <template v-else>
                <v-menu
                        open-on-hover
                        offset-y
                        transition="slide-y-transition"
                >
                    <template slot="activator">
                        <v-btn flat>
                            {{ $t('message.account') }}
                        </v-btn>
                    </template>

                    <v-list>
                        <v-list-tile :to="{ name: 'dashboard' }">
                            <v-list-tile-title>
                                {{ $t('message.dashboard') }}
                            </v-list-tile-title>
                        </v-list-tile>

                        <v-list-tile @click="logout">
                            <v-list-tile-title>
                                {{ $t('message.logout') }}
                            </v-list-tile-title>
                        </v-list-tile>
                    </v-list>
                </v-menu>
            </template>
        </v-toolbar-items>

        <v-menu class="hidden-md-and-up">
            <v-toolbar-side-icon slot="activator"></v-toolbar-side-icon>

            <v-list>
                <v-list-tile :to="{ name: 'home' }" exact>
                    <v-list-tile-title>
                        {{ $t('message.Home') }}
                    </v-list-tile-title>
                </v-list-tile>

                <v-list-tile :to="{ name: 'about' }">
                    <v-list-tile-title>
                        {{ $t('message.About') }}
                    </v-list-tile-title>
                </v-list-tile>

                <v-list-tile :to="{ name: 'contact' }">
                    <v-list-tile-title>
                        {{ $t('message.Contact') }}
                    </v-list-tile-title>
                </v-list-tile>

                <template v-if="!loggedIn">
                    <v-list-tile :to="{ name: 'login' }">
                        <v-list-tile-title>
                            {{ $t('message.login') }}
                        </v-list-tile-title>
                    </v-list-tile>

                    <v-list-tile :to="{ name: 'register' }">
                        <v-list-tile-title>
                            {{ $t('message.register') }}
                        </v-list-tile-title>
                    </v-list-tile>
                </template>

                <template v-else>
                    <v-list-tile :to="{ name: 'dashboard' }">
                        <v-list-tile-title>
                            {{ $t('message.dashboard') }}
                        </v-list-tile-title>
                    </v-list-tile>

                    <v-list-tile @click="logout">
                        <v-list-tile-title>
                            {{ $t('message.logout') }}
                        </v-list-tile-title>
                    </v-list-tile>
                </template>
            </v-list>
        </v-menu>
    </v-toolbar>
</template>

<script>
    import AppConfig from '../../constants/AppConfig';
    import { mapGetters } from 'vuex';

    export default {
        name: "Header",

        computed: {
            ...mapGetters(["loggedIn", "languages"])
        },

        data() {
            return {
                appName: AppConfig.brandName,
                logo: AppConfig.brandLogo,
                baseUrl: AppConfig.baseUrl
            }
        },

        methods: {
            logout() {
                this.$store.dispatch('logoutHandler', { args: {} });
            }
        }
    }
</script>

<style scoped>
    .toolbar-title {
        color: inherit;
        text-decoration: inherit;
    }
</style>