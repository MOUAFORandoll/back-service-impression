/**
 * Countries Module
 */
import Vue from 'vue';
import router from '../../../router';
import { apiModel, makeApiRequest } from "../../../api";

// States
const state = {
    countries: []
};

// Getters
const getters = {
    countries: state => {
        return state.countries
    }
};

// Actions
const actions = {
    getCountries(context, payload) {
        function successCallback(response) {
            context.commit('getCountriesHandler', { countries: response.data.countries });
        }

        function errorCallback(error) {
            Vue.notify({
                type: 'error',
                text: payload.errorMessages.error
            });
        }

        const localToken = localStorage.getItem('ms-token');

        makeApiRequest(payload.args, apiModel.Country.List, localToken, successCallback, errorCallback, payload.errorMessages);
    }
};

// Mutations
const mutations = {
    getCountriesHandler(state, { countries }) {
        // Update countries state
        state.countries = countries;
    }
};

export default {
    state,
    getters,
    actions,
    mutations
}