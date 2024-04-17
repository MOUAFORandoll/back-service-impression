<template>
    <v-menu
            :class="className"
            open-on-hover
            offset-y
            transition="slide-y-transition"
    >
        <template slot="activator">
            <v-btn flat>
                <v-icon left>fas fa-map</v-icon>

                {{ language.locale }}
            </v-btn>
        </template>

        <v-list>
            <v-list-tile v-for="language in languages" @click="changeLanguage(language)" :key="language.locale">
                <v-btn flat>
                    <flag :iso="language.icon" :squared=false />

                    {{ language.locale }}
                </v-btn>
            </v-list-tile>
        </v-list>
    </v-menu>
</template>

<script>
    import { mapGetters } from 'vuex';

    export default {
        name: "LocaleChanger",

        props: ["className"],

        data() {
            return {
                language: {
                    name: '',
                    icon: this.$i18n.locale,
                    locale: this.$i18n.locale
                }
            }
        },

        computed: {
            ...mapGetters(["languages"])
        },

        methods: {
            changeLanguage(language) {
                let self = this;

                this.$store.dispatch('changeLanguage', language)
                    .then(res => (self.language = language));
            }
        }
    }
</script>

<style scoped>

</style>