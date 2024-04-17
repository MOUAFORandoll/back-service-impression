<template>
    <v-app>
        <router-view></router-view>

        <loader></loader>

        <notifications
                position="top right"
                animation-type="velocity"
        />
    </v-app>
</template>

<script>
    import Loader from "./components/Partials/Loader.vue";
    import { store } from './store/store';

    export default {
        name: "App",

        components: {Loader},

        created() {
            let self = this;

            // Add a request interceptor
            axios.interceptors.request.use(function (config) {
                // Do something before request is sent
                store.dispatch('toggleLoaderState', true);

                return config;
            }, function (error) {
                // Do something with request error
                store.dispatch('toggleLoaderState', false);

                return Promise.reject(error);
            });

            // Add a response interceptor
            axios.interceptors.response.use(function (response) {
                // Do something with response data
                store.dispatch('toggleLoaderState', false);

                return response;
            }, function (error) {console.log('Error:', error);
                // Do something with response error
                store.dispatch('toggleLoaderState', false);

                // Log user out instead and redirect them to login page
                //self.$store.dispatch('logoutHandler', { args: {} });

                return Promise.reject(error);
            });
        }
    }
</script>

<style scoped>

</style>