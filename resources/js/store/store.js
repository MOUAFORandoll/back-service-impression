import Vue from 'vue';
import Vuex from 'vuex';

// Modules
import auth from './modules/auth';
import settings from './modules/settings';
import loader from './modules/loader';
import contracts from './modules/contracts';
import users from './modules/users';
import countries from './modules/countries';
import roles from './modules/roles';
import partners from './modules/partners';
import rdv from './modules/rdv';

Vue.use(Vuex);

export const store = new Vuex.Store({
    modules: {
        auth,
        settings,
        loader,
        contracts,
        users,
        countries,
        roles,
        partners,
        rdv
    }
});