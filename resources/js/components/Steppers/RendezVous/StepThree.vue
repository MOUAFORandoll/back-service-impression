<template>
    <div id="rdv-details" class="card transparent">
        <div class="card-body pb-0">
            <div class="alert alert-success" role="alert">
                {{ $t('message.appointmentMade') }}
            </div>
        </div>

        <div class="list-group list-group-flush">
            <div class="list-group-item">
                <div class="row">
                    <div class="col-sm-12 col-md-3 text-md-right font-weight-bold label">
                        {{ $tc('message.countries', 1) }}
                    </div>

                    <div class="col-sm-12 col-md-9">
                        {{ data.pays }}
                    </div>
                </div>
            </div>

            <div class="list-group-item">
                <div class="row">
                    <div class="col-sm-12 col-md-3 text-md-right font-weight-bold label">
                        {{ $tc('message.types', 1) }}
                    </div>

                    <div class="col-sm-12 col-md-9">
                        {{ data.type }}
                    </div>
                </div>
            </div>

            <div class="list-group-item">
                <div class="row">
                    <div class="col-sm-12 col-md-3 text-md-right font-weight-bold label">
                        {{ $t('message.qTime1') }}
                    </div>

                    <div class="col-sm-12 col-md-9">
                        {{ selectedDate1 }}
                    </div>
                </div>
            </div>

            <div class="list-group-item">
                <div class="row">
                    <div class="col-sm-12 col-md-3 text-md-right font-weight-bold label">
                        {{ $t('message.qTime2') }}
                    </div>

                    <div class="col-sm-12 col-md-9">
                        {{ selectedDate2 }}
                    </div>
                </div>
            </div>

            <div class="list-group-item">
                <div class="row">
                    <div class="col-sm-12 col-md-3 text-md-right font-weight-bold label">
                        {{ $t('message.subject') }}
                    </div>

                    <div class="col-sm-12 col-md-9">
                        {{ data.objet }}
                    </div>
                </div>
            </div>

            <div class="list-group-item">
                <div class="row">
                    <div class="col-sm-12 col-md-3 text-md-right font-weight-bold label">
                        {{ $t('message.name') }}
                    </div>

                    <div class="col-sm-12 col-md-9">
                        {{ data.nom }}
                    </div>
                </div>
            </div>

            <div class="list-group-item">
                <div class="row">
                    <div class="col-sm-12 col-md-3 text-md-right font-weight-bold label">
                        {{ $t('message.email') }}
                    </div>

                    <div class="col-sm-12 col-md-9">
                        {{ data.email }}
                    </div>
                </div>
            </div>

            <div class="list-group-item" v-if="data.whatsapp != null && data.whatsapp != ''">
                <div class="row">
                    <div class="col-sm-12 col-md-3 text-md-right font-weight-bold label">
                        {{ $t('message.whatsappNumber') }}
                    </div>

                    <div class="col-sm-12 col-md-9">
                        {{ data.whatsapp }}
                    </div>
                </div>
            </div>

            <div class="list-group-item">
                <div class="row">
                    <div class="col-sm-12 col-md-3 text-md-right font-weight-bold label">
                        {{ $t('message.phoneNumber') }}
                    </div>

                    <div class="col-sm-12 col-md-9">
                        {{ data.numero }}
                    </div>
                </div>
            </div>

            <div class="list-group-item" v-if="data.skype != null && data.skype != ''">
                <div class="row">
                    <div class="col-sm-12 col-md-3 text-md-right font-weight-bold label">
                        {{ $t('message.skype') }}
                    </div>

                    <div class="col-sm-12 col-md-9">
                        {{ data.skype }}
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <div class="pull-right">
                <button type="submit" class="btn btn-sn mb-2" @click="bookAgain">
                    {{ $t('message.bookAgain') }}
                </button>
            </div>
        </div>
    </div>
</template>

<script>
    import moment from 'moment';

    export default {
        name: "StepThree",

        props: ['data'],

        computed: {
            selectedDate1: function() {
                return moment(this.data.date_debut1, 'DD/MM/YYYY HH:mm').format('DD/MM/YYYY HH:mm') + ' - ' + moment(this.data.date_fin1, 'DD/MM/YYYY HH:mm').format('DD/MM/YYYY HH:mm');
            },

            selectedDate2: function() {
                return moment(this.data.date_debut2, 'DD/MM/YYYY HH:mm').format('DD/MM/YYYY HH:mm') + ' - ' + moment(this.data.date_fin2, 'DD/MM/YYYY HH:mm').format('DD/MM/YYYY HH:mm');
            }
        },

        methods: {
            bookAgain: function() {
                // Emit event to parent (RendezVous.vue)
                this.$emit('book-again');
            }
        },

        mounted() {
            let rdv = document.getElementById('rdv-details');
            rdv.scrollIntoView();
        }
    }
</script>

<style scoped>

</style>