/**
 * Users Module
 */
import Vue from 'vue';
import router from '../../../router';
import { apiModel, makeApiRequest } from "../../../api";
import AppConfig from '../../../constants/AppConfig';

// States
const state = {
    users: [],
    user: {}
};

// Getters
const getters = {
    users: state => {
        return state.users
    },

    user: state => {
        return state.user
    }
};

// Actions
const actions = {
    getUsers(context, payload) {
        function successCallback(response) {
            context.commit('getUsersHandler', { users: response.data.users });
        }

        function errorCallback(error) {
            Vue.notify({
                type: 'error',
                text: payload.errorMessages.error
            });
        }

        const localToken = localStorage.getItem('ms-token');

        makeApiRequest(payload.args, apiModel.User.List, localToken, successCallback, errorCallback, payload.errorMessages);
    },

    getUser(context, payload) {
        function successCallback(response) {
            context.commit('getUserHandler', { user: response.data.user });
        }

        function errorCallback(error) {
            Vue.notify({
                type: 'error',
                text: payload.errorMessages.error
            });
        }

        const localToken = localStorage.getItem('ms-token');

        makeApiRequest(payload.args, apiModel.User.Get, localToken, successCallback, errorCallback, payload.errorMessages);
    },

    createUser(context, payload) {
        function successCallback(response) {
            Vue.notify({
                type: 'success',
                text: payload.successMessage
            });

            router.push({ name: 'users' });
        }

        function errorCallback(error) {
            Vue.notify({
                type: 'error',
                text: payload.errorMessages.error
            });
        }

        const localToken = localStorage.getItem('ms-token');

        makeApiRequest(payload.args, apiModel.User.Create, localToken, successCallback, errorCallback, payload.errorMessages);
    },

    updateUser(context, payload) {
        function successCallback(response) {
            Vue.notify({
                type: 'success',
                text: payload.successMessage
            });

            router.push({ name: 'users' });
        }

        function errorCallback(error) {
            Vue.notify({
                type: 'error',
                text: payload.errorMessages.error
            });
        }

        const localToken = localStorage.getItem('ms-token');

        makeApiRequest(payload.args, apiModel.User.Update, localToken, successCallback, errorCallback, payload.errorMessages);
    },

    deleteUser(context, payload) {
        function successCallback(response) {
            context.commit('deleteUserHandler', { index: payload.index, successMessage: payload.successMessage });
        }

        function errorCallback(error) {
            Vue.notify({
                type: 'error',
                text: payload.errorMessages.error
            });
        }

        const localToken = localStorage.getItem('ms-token');

        makeApiRequest(payload.args, apiModel.User.Delete, localToken, successCallback, errorCallback, payload.errorMessages);
    },
};

// Mutations
const mutations = {
    getUsersHandler(state, { users }) {
        // Update users state
        state.users = users;
    },

    getUserHandler(state, { user }) {
        // Update user state
        state.user = user;
    },

    deleteUserHandler(state, { index, successMessage }) {
        state.users.splice(index, 1);

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