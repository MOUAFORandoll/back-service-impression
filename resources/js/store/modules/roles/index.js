/**
 * Roles Module
 */
import Vue from 'vue';
import router from '../../../router';
import { apiModel, makeApiRequest } from "../../../api";

// States
const state = {
    roles: [],
    userRoles: []
};

// Getters
const getters = {
    roles: state => {
        return state.roles
    },

    userRoles: state => {
        return state.userRoles
    }
};

// Actions
const actions = {
    getRoles(context, payload) {
        function successCallback(response) {
            context.commit('getRolesHandler', { roles: response.data.roles });
        }

        function errorCallback(error) {
            Vue.notify({
                type: 'error',
                text: payload.errorMessages.error
            });
        }

        const localToken = localStorage.getItem('ms-token');

        makeApiRequest(payload.args, apiModel.Role.List, localToken, successCallback, errorCallback, payload.errorMessages);
    },

    getUserRoles(context, payload) {
        function successCallback(response) {
            context.commit('getUserRolesHandler', { roles: response.data.roles });
        }

        function errorCallback(error) {
            console.log("Error:", error);
        }

        const localToken = localStorage.getItem('ms-token');

        makeApiRequest(payload.args, apiModel.User.Roles, localToken, successCallback, errorCallback, payload.errorMessages);
    }
};

// Mutations
const mutations = {
    getRolesHandler(state, { roles }) {
        // Update roles state
        state.roles = roles;
    },

    getUserRolesHandler(state, { roles }) {
        // Update userRoles state
        state.userRoles = roles;
    }
};

export default {
    state,
    getters,
    actions,
    mutations
}