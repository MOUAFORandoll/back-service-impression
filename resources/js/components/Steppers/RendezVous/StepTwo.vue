<template>
    <div class="card transparent">
        <div class="card-header">
            {{ title }}
        </div>

        <div class="card-body pb-0">
            <div class="form-group">
                <label class="label">
                    {{ $t('message.qTime1') }}
                </label>

                <input type="text" class="form-control" v-model="selectedDate1" disabled>
            </div>

            <div class="form-group">
                <label class="label">
                    {{ $t('message.qTime2') }}
                </label>

                <input type="text" class="form-control" v-model="selectedDate2" disabled>
            </div>

            <div class="form-group">
                <label class="label" for="nom">
                    {{ $t('message.qName') }}
                </label>

                <input id="nom" type="text" class="form-control" :class="{ 'is-invalid': $v.form.nom.$error }" v-model="$v.form.nom.$model">

                <div class="invalid-feedback" v-if="!$v.form.nom.required">
                    {{ $t('message.requiredField') }}
                </div>
            </div>

            <div class="form-group">
                <label class="label" for="email">
                    {{ $t('message.email') }}
                </label>

                <input id="email" type="email" class="form-control" :class="{ 'is-invalid': $v.form.email.$error }" v-model="$v.form.email.$model">

                <div class="invalid-feedback" v-if="!$v.form.email.required">
                    {{ $t('message.requiredField') }}
                </div>
                <div class="invalid-feedback" v-if="!$v.form.email.email">
                    {{ $t('message.emailNotValid') }}
                </div>
            </div>

            <div class="form-group">
                <label class="label" for="whatsapp">
                    {{ $t('message.whatsappNumber') }}
                </label>

                <input id="whatsapp" type="text" class="form-control" :class="{ 'is-invalid': $v.form.whatsapp.$error }" v-model="$v.form.whatsapp.$model">

                <div class="invalid-feedback" v-if="!$v.form.whatsapp.$error">
                    {{ $t('message.requiredField') }}
                </div>
            </div>

            <div class="form-group">
                <label class="label" for="numero">
                    {{ $t('message.phoneNumber') }}
                </label>

                <input id="numero" type="text" class="form-control" :class="{ 'is-invalid': $v.form.numero.$error }" v-model="$v.form.numero.$model">

                <div class="invalid-feedback" v-if="!$v.form.numero.required">
                    {{ $t('message.requiredField') }}
                </div>
            </div>

            <div class="form-group">
                <label class="label" for="skype">
                    {{ $t('message.skype') }}
                </label>

                <input id="skype" type="text" class="form-control" :class="{ 'is-invalid': $v.form.skype.$error }" v-model="$v.form.skype.$model">

                <div class="invalid-feedback" v-if="!$v.form.skype.$error">This field is invalid</div>
            </div>

            <div class="form-group row justify-content-between">
                <div class="col">
                    <button type="submit" class="btn btn-secondary mb-2" @click="back">
                        {{ $t('message.previous') }}
                    </button>
                </div>

                <div class="col">
                    <button type="submit" class="btn btn-sn mb-2" @click="submit">
                        {{ $t('message.submit') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import moment from 'moment';
    import { required, email } from 'vuelidate/lib/validators';

    export default {
        name: "StepTwo",

        props: ['title', 'form1', 'form2'],

        computed: {
            mForm: function() {
                return this.form1;
            },

            selectedDate1: function() {
                return moment(this.mForm.date_debut1, 'DD/MM/YYYY HH:mm').format('DD/MM/YYYY HH:mm') + ' - ' + moment(this.mForm.date_fin1, 'DD/MM/YYYY HH:mm').format('DD/MM/YYYY HH:mm');
            },

            selectedDate2: function() {
                return moment(this.mForm.date_debut2, 'DD/MM/YYYY HH:mm').format('DD/MM/YYYY HH:mm') + ' - ' + moment(this.mForm.date_fin2, 'DD/MM/YYYY HH:mm').format('DD/MM/YYYY HH:mm');
            }
        },

        data() {
            return {
                form: {
                    nom: this.form2.nom,
                    email: this.form2.email,
                    whatsapp: this.form2.whatsapp,
                    numero: this.form2.numero,
                    skype: this.form2.skype,
                }
            }
        },

        methods: {
            back: function() {
                // Go back one step
                this.$emit('go-back', { step: 2, form2: this.form });
            },

            submit: function() {
                this.$v.$touch();

                if(!this.$v.$invalid) {
                    // Emit step 2 form data to parent (RendezVous.vue)
                    this.$emit('step-two-data', this.form);
                }
            }
        },

        validations: {
            form: {
                nom: {
                    required
                },
                email: {
                    required,
                    email
                },
                whatsapp: {
                    //required
                },
                numero: {
                    required
                },
                skype: {
                    //required
                }
            }
        },

        watch: {
            $v: {
                handler: function (val) {
                    if(!val.$invalid) {
                        this.$emit('step-two-data', this.form);
                    } else {
                        console.log("Errors:", val);
                    }
                }
            }
        },

        mounted() {
            let n = document.getElementById('nom');
            n.scrollIntoView();
        }
    }
</script>

<style scoped>

</style>
