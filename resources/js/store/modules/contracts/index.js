/**
 * Contracts Module
 */
import Vue from 'vue';
import router from '../../../router';
import { apiModel, makeApiRequest } from "../../../api";

// States
const state = {
    contracts: [],
    contract: {}
};

// Getters
const getters = {
    contracts: state => {
        return state.contracts
    },

    contract: state => {
        return state.contract
    }
};

// Actions
const actions = {
    getContracts(context, payload) {
        function successCallback(response) {
            context.commit('getContractsHandler', { contracts: response.data.cims });
        }

        function errorCallback(error) {
            Vue.notify({
                type: 'error',
                text: payload.errorMessages.error
            });
        }

        const localToken = localStorage.getItem('ms-token');

        makeApiRequest(payload.args, apiModel.Contract.List, localToken, successCallback, errorCallback, payload.errorMessages);
    },

    getContract(context, payload) {
        function successCallback(response) {
            context.commit('getContractHandler', { contract: response.data.cim });
        }

        function errorCallback(error) {
            Vue.notify({
                type: 'error',
                text: payload.errorMessages.error
            });
        }

        const localToken = localStorage.getItem('ms-token');

        makeApiRequest(payload.args, apiModel.Contract.Get, localToken, successCallback, errorCallback, payload.errorMessages);
    },

    createContract(context, payload) {
        function successCallback(response) {
            Vue.notify({
                type: 'success',
                text: payload.successMessage
            });

            router.push({ name: 'contracts' });
        }

        function errorCallback(error) {
            Vue.notify({
                type: 'error',
                text: payload.errorMessages.error
            });
        }

        const localToken = localStorage.getItem('ms-token');

        makeApiRequest(payload.args, apiModel.Contract.Create, localToken, successCallback, errorCallback, payload.errorMessages);
    },

    updateContract(context, payload) {
        function successCallback(response) {
            Vue.notify({
                type: 'success',
                text: payload.successMessage
            });

            router.push({ name: 'contracts' });
        }

        function errorCallback(error) {
            Vue.notify({
                type: 'error',
                text: payload.errorMessages.error
            });
        }

        const localToken = localStorage.getItem('ms-token');

        makeApiRequest(payload.args, apiModel.Contract.Update, localToken, successCallback, errorCallback, payload.errorMessages);
    },

    deleteContract(context, payload) {
        function successCallback(response) {
            context.commit('deleteContractHandler', { index: payload.index, successMessage: payload.successMessage });
        }

        function errorCallback(error) {
            Vue.notify({
                type: 'error',
                text: payload.errorMessages.error
            });
        }

        const localToken = localStorage.getItem('ms-token');

        makeApiRequest(payload.args, apiModel.Contract.Delete, localToken, successCallback, errorCallback, payload.errorMessages);
    },
};

// Mutations
const mutations = {
    getContractsHandler(state, { contracts }) {
        // Update contracts state
        state.contracts = contracts;
    },

    getContractHandler(state, { contract }) {
        // Update contract state
        state.contract = contract;
    },

    deleteContractHandler(state, { index, successMessage }) {
        state.contracts.splice(index, 1);

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