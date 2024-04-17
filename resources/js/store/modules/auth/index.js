/**
 * Auth Module
 */
import Vue from 'vue';
import router from '../../../router';
import { apiModel, makeApiRequest } from "../../../api";

// States
const state = {
    me: {},
    loggedIn: localStorage.getItem('ms-token') != null
};

// Getters
const getters = {
    me: state => {
        return state.me
    },

    loggedIn: state => {
        return state.loggedIn
    }
};

// Actions
const actions = {
    loginHandler(context, payload) {
        function successCallback(response) {
            context.commit('loginHandlerMut', { user: response.data.user, token: response.data.token, expiration: response.data.token_expiration });
        }

        function errorCallback(error) {
            Vue.notify({
                type: 'error',
                text: error.message
            });
        }

        const localToken = "";

        makeApiRequest(payload.args, apiModel.Auth.Login, localToken, successCallback, errorCallback);
    },

    oAuthLoginHandler(context, payload) {
        function successCallback(response) {
            context.commit('loginHandlerMut', { user: response.data.user, token: response.data.access_token, expiration: response.data.token_expiration });
        }

        function errorCallback(error) {
            Vue.notify({
                type: 'error',
                text: payload.errorMessage
            });
        }

        const localToken = "";

        makeApiRequest(payload.args, apiModel.Auth.Login, localToken, successCallback, errorCallback);
    },

    registerHandler(context, payload) {
        function successCallback(response) {
            context.commit('registerHandlerMut', { user: response.data.user, token: response.data.token, expiration: response.data.token_expiration });
        }

        function errorCallback(error) {
            Vue.notify({
                type: 'error',
                text: error.message
            });
        }

        const localToken = "";

        makeApiRequest(payload.args, apiModel.Auth.Register, localToken, successCallback, errorCallback, true);
    },

    logoutHandler(context, payload) {
        function successCallback(response) {
            context.commit('logoutHandlerMut');
        }

        function errorCallback(error) {
            Vue.notify({
                type: 'error',
                text: error.message
            });
        }

        const localToken = localStorage.getItem('sn-token');

        makeApiRequest(payload.args, apiModel.Auth.Logout, localToken, successCallback, errorCallback);
    }
};

// Mutations
const mutations = {
    loginHandlerMut(state, { user, token, expiration }) {
        // Update me state
        state.me = user;

        // Update loggedIn state
        state.loggedIn = true;

        // Store user and token locally
        localStorage.setItem('user', JSON.stringify(user));
        localStorage.setItem('ms-token', token);
        localStorage.setItem('token-expires-at', expiration);

        // Check if url contains redirect parameter
        if (router.currentRoute.query.redirect != null) {
            // Redirect to intended path
            router.push({ path: router.currentRoute.query.redirect, query: router.currentRoute.query });
        } else {
            // Redirect to dashboard
            router.push("/dashboard");
        }
    },

    registerHandlerMut(state, { user, token, expiration }) {
        // Update me state
        state.me = user;

        // Update loggedIn state
        state.loggedIn = true;

        // Store user and token locally
        localStorage.setItem('user', JSON.stringify(user));
        localStorage.setItem('ms-token', token);
        localStorage.setItem('token-expires-at', expiration);

        // Redirect to dashboard
        router.push("/dashboard");
    },

    logoutHandlerMut(state) {
        // Update me state
        state.me = {};

        // Update loggedIn state
        state.loggedIn = false;

        // Remove locally stored user and token
        localStorage.removeItem('user');
        localStorage.removeItem('ms-token');
        localStorage.removeItem('token-expires-at');

        // Redirect to login view
        router.push("/login");
    }
};

export default {
    state,
    getters,
    actions,
    mutations
}