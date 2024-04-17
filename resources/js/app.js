/*window._ = require('lodash');
window.Popper = require('popper.js').default;

try {
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
} catch (e) {}*/


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import '@fortawesome/fontawesome-free/css/all.css';
import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuetify from 'vuetify';
import VueI18n from 'vue-i18n';
import Nprogress from 'nprogress';
import Notifications from 'vue-notification';
import velocity from 'velocity-animate';
import Vuelidate from 'vuelidate';
import VueSweetalert2 from 'vue-sweetalert2';
import BootstrapVue from 'bootstrap-vue';

// Store
import { store } from './store/store';

// Router
import router from './router';

// Messages
import messages from './lang';

// Container component
import App from './App.vue';

// Plugins
Vue.use(Vuetify, {
    iconfont: 'fa',
    theme: store.getters.selectedTheme.theme
});
Vue.use(VueRouter);
Vue.use(VueI18n);
Vue.use(Notifications, { velocity });
Vue.use(Vuelidate);
Vue.use(VueSweetalert2, {
    confirmButtonColor: '#00ADA7'
});
Vue.use(BootstrapVue);

// Styles
import '../sass/admin.scss';

//window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

//Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('rendez-vous', require('./views/RendezVous.vue').default);

// Navigation guards before each request
router.beforeResolve((to, from, next) => {
    Nprogress.start();

    if (to.matched.some(record => record.meta.requiresAuth)) {
        // User needs to be logged in
        if (localStorage.getItem('user') === null ) {
            next({
                path: '/login',
                query: { redirect: to.fullPath }
            })
        } else {
            const date = localStorage.getItem('token-expires-at');

            let expiryDate = new Date(date);
            let today = new Date();

            console.log("Expiry date:", expiryDate);
            console.log("Today:", today);

            if((today > expiryDate)) {
                // If token has expired, logout user
                store.dispatch('logoutHandler', { args: {} });

                next({
                    path: '/login',
                    query: { redirect: to.fullPath }
                });
            } else {
                // If token is still valid, process request
                next();
            }

            next();
        }
    } else if(to.matched.some(record => record.meta.guest)) {
        if(localStorage.getItem('ms-token') == null){
            next();
        }
        else{
            next({ path: '/dashboard'})
        }
    } else {
        // User doesn't need to be logged in
        next();
    }
});

// Navigation guards after each request
router.afterEach((to, from) => {
    // Complete the animation of the route progress bar.
    Nprogress.done();
});

// Create VueI18n instance with options
const i18n = new VueI18n({
    locale: store.getters.selectedLocale.locale, // set locale
    fallbackLocale: 'en', // set fallback locale
    messages, // set locale messages
});

export default i18n;

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

new Vue({
    router,
    store,
    i18n,
    render: h => h(App),
    components: { App },
    messages
}).$mount('#app');
