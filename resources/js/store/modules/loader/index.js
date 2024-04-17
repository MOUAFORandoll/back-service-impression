/**
 * Loader Module
 */

// States
const state = {
    loader: false
};

// Getters
const getters = {
    loader: state => {
        return state.loader
    }
};

// Actions
const actions = {
    toggleLoaderState(context, payload) {
        context.commit('toggleLoaderStateHandler', payload);
    }
};

// Mutations
const mutations = {
    toggleLoaderStateHandler(state, value) {
        state.loader = value;
    }
};

export default {
    state,
    getters,
    actions,
    mutations
}