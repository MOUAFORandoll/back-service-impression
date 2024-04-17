<template>
    <v-toolbar app dark scroll-off-screen class="primary">
        <v-avatar>
            <img :src="logo" alt="logo">
        </v-avatar>

        <v-spacer></v-spacer>

        <v-toolbar-items class="hidden-sm-and-down">
            <v-btn flat :to="{ name: 'home' }" exact>
                {{ $t('message.offerSeats')}}
            </v-btn>

            <v-btn flat :to="{ name: 'about' }">
                {{ $t('message.searchTrips')}}
            </v-btn>

            <v-btn flat :to="{ name: 'contact' }">
                {{ $t('message.howItWorks')}}
            </v-btn>

            <v-btn flat :to="{ name: 'login' }">
                {{ $t('message.login')}}
            </v-btn>

            <v-btn flat :to="{ name: 'register' }">
                {{ $t('message.register')}}
            </v-btn>
        </v-toolbar-items>

        <v-menu class="hidden-md-and-up">
            <v-toolbar-side-icon slot="activator"></v-toolbar-side-icon>

            <v-list>
                <v-list-tile :to="{ name: 'home' }" exact>
                    <v-list-tile-title>
                        {{ $t('message.offerSeats') }}
                    </v-list-tile-title>
                </v-list-tile>

                <v-list-tile :to="{ name: 'about' }">
                    <v-list-tile-title>
                        {{ $t('message.searchTrips') }}
                    </v-list-tile-title>
                </v-list-tile>

                <v-list-tile :to="{ name: 'contact' }">
                    <v-list-tile-title>
                        {{ $t('message.howItWorks') }}
                    </v-list-tile-title>
                </v-list-tile>

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
            </v-list>
        </v-menu>
    </v-toolbar>
</template>

<script>
    import AppConfig from '../../constants/AppConfig';
    import { mapGetters } from 'vuex';

    export default {
        name: "AuthHeader",

        computed: {
            ...mapGetters(["languages"])
        },

        data() {
            return {
                appName: AppConfig.brandName,
                logo: AppConfig.brandLogo
            }
        }
    }
</script>

<style scoped>

</style>