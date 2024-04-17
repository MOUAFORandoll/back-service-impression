/**
 * Partners Module
 */
import Vue from 'vue';
import router from '../../../router';
import { apiModel, makeApiRequest } from "../../../api";
import AppConfig from '../../../constants/AppConfig';

// States
const state = {
    partners: [],
    partner: {}
};

// Getters
const getters = {
    partners: state => {
        return state.partners
    },

    partner: state => {
        return state.partner
    }
};

// Actions
const actions = {
    getPartners(context, payload) {
        function successCallback(response) {
            context.commit('getPartnersHandler', { partners: response.data.partenaires });
        }

        function errorCallback(error) {
            Vue.notify({
                type: 'error',
                text: payload.errorMessages.error
            });
        }

        const localToken = localStorage.getItem('ms-token');

        makeApiRequest(payload.args, apiModel.Partner.List, localToken, successCallback, errorCallback, payload.errorMessages);
    },

    getPartner(context, payload) {
        function successCallback(response) {
            context.commit('getPartnerHandler', { partner: response.data.partenaire });
        }

        function errorCallback(error) {
            Vue.notify({
                type: 'error',
                text: payload.errorMessages.error
            });
        }

        const localToken = localStorage.getItem('ms-token');

        makeApiRequest(payload.args, apiModel.Partner.Get, localToken, successCallback, errorCallback, payload.errorMessages);
    },

    createPartner(context, payload) {
        function successCallback(response) {
            Vue.notify({
                type: 'success',
                text: payload.successMessage
            });

            router.push({ name: 'partners' });
        }

        function errorCallback(error) {
            Vue.notify({
                type: 'error',
                text: payload.errorMessages.error
            });
        }

        const localToken = localStorage.getItem('ms-token');

        makeApiRequest(payload.args, apiModel.Partner.Create, localToken, successCallback, errorCallback, payload.errorMessages);
    },

    updatePartner(context, payload) {
        function successCallback(response) {
            Vue.notify({
                type: 'success',
                text: payload.successMessage
            });

            router.push({ name: 'partners' });
        }

        function errorCallback(error) {
            Vue.notify({
                type: 'error',
                text: payload.errorMessages.error
            });
        }

        const localToken = localStorage.getItem('ms-token');

        makeApiRequest(payload.args, apiModel.Partner.Update, localToken, successCallback, errorCallback, payload.errorMessages);
    },

    deletePartner(context, payload) {
        function successCallback(response) {
            context.commit('deletePartnerHandler', { index: payload.index, successMessage: payload.successMessage });
        }

        function errorCallback(error) {
            Vue.notify({
                type: 'error',
                text: payload.errorMessages.error
            });
        }

        const localToken = localStorage.getItem('ms-token');

        makeApiRequest(payload.args, apiModel.Partner.Delete, localToken, successCallback, errorCallback, payload.errorMessages);
    },
};

// Mutations
const mutations = {
    getPartnersHandler(state, { partners }) {
        // Update partners state
        state.partners = partners;
    },

    getPartnerHandler(state, { partner }) {
        // Update partner state
        state.partner = partner;
    },

    deletePartnerHandler(state, { index, successMessage }) {
        state.partners.splice(index, 1);

        Vue.notify({
            type: 'success',
            text: successMessage
        });
    }
};

export default {
    state,
    getters,
    actions,
    mutations
}