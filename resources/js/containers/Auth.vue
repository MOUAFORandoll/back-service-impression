<!-- Authentication Structure -->
<template>
    <v-app>
        <auth-header></auth-header>

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
    import AuthHeader from "../components/Header/AuthHeader";
    import FooterComponent from '../components/Footer/Footer';

    export default {
        name: "Auth",

        components: { AuthHeader, FooterComponent }
    }
</script>

<style scoped>

</style>