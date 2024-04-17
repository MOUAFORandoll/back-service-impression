<!-- App Main Structure -->
<template>
    <v-app>
        <header-component></header-component>
        <v-content>
            <v-container fluid fill-height>
                <v-slide-y-transition>
                    <router-view></router-view>
                </v-slide-y-transition>
            </v-container>
        </v-content>

        <footer-component></footer-component>
    </v-app>
</template>

<script>
    import AppConfig from '../constants/AppConfig';
    import HeaderComponent from "../components/Header/Header";
    import FooterComponent from "../components/Footer/Footer";

    export default {
        name: "App",

        components: { FooterComponent, HeaderComponent },

        data() {
            return {
                backgroundImg: AppConfig.backgroundImg
            }
        }
    }
</script>

<style scoped>

</style>
