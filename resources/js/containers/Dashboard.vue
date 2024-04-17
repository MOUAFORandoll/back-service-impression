<!-- Dashboard Structure -->
<template>
    <v-app>
        <dashboard-header></dashboard-header>

        <v-content>
            <v-container>
                <v-slide-y-transition>
                    <router-view></router-view>
                </v-slide-y-transition>
            </v-container>
        </v-content>
    </v-app>
</template>

<script>
    import AppConfig from '../constants/AppConfig';
    import DashboardHeader from "../components/Header/DashboardHeader";

    export default {
        name: "Dashboard",

        components: {DashboardHeader},

        data() {
            return {
                backgroundImg: AppConfig.backgroundImg
            }
        }
    }
</script>

<style scoped>
    #parallax {
        background-size: cover;
        width: 100%;
        height: 100%;
    }

    @media(min-height: 1024px) {
        #parallax {
            height: 100vh;
        }
    }
</style>
