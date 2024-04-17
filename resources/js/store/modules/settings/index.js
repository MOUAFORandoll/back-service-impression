/**
 * Settings Module
 */
import { languages, themes } from "./data";
import i18n from '../../../app';

// States
const state = {
    languages,
    themes,
    selectedTheme: themes[0],
    selectedLocale: languages[1]
};

// Getters
const getters = {
    languages: state => {
        return state.languages;
    },

    selectedLocale: state => {
        return state.selectedLocale;
    },

    themes: state => {
        return state.themes;
    },

    selectedTheme: state => {
        return state.selectedTheme;
    }
};

// Actions
const actions = {
    changeLanguage(context, payload) {
        context.commit('changeLanguageHandler', payload);
    },

    changeTheme(context, payload) {
        context.commit('changeThemeHandler', payload);
    }
};

// Mutations
const mutations = {
    changeLanguageHandler(state, language) {
        // Change locale of vue-i18n plugin
        i18n.locale = language.locale;

        // Change state language
        state.selectedLocale = language;
    },

    changeThemeHandler(state, theme) {
        state.selectedTheme = theme;
    }
};

export default {
    state,
    getters,
    actions,
    mutations
}