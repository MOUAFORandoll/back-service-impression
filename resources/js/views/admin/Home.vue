<template>
    <div class="admin-home">
        <div class="center-text">
            <div class="card border-light">
                <div class="card-body">
                    <h3 class="card-title text-center">
                        {{ $t('message.home') }}
                    </h3>

                    <div class="row">
                        <div class="col-12 col-md-4 pa-3" v-for="(item, key) in items">
                            <router-link :to="{ name: item.route, params: {} }">
                                <div class="card border-light">
                                    <img class="card-img" :src="defaultImg" alt="Image">

                                    <div class="card-img-overlay center-text-outer">
                                        <h5 class="card-title center-text-inner">
                                            {{ item.title }}
                                        </h5>
                                    </div>
                                </div>
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Home",

        data() {
            return {
                defaultImg: 'data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22580%22%20height%3D%22270%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20580%20270%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16c1e62a312%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A29pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16c1e62a312%22%3E%3Crect%20width%3D%22580%22%20height%3D%22270%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22215.828125%22%20y%3D%22147.9%22%3E580x270%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E',
                items: [
                  {
                    title: this.$i18n.tc('message.users', 2),
                    route: 'users',
                    image_url: ''
                  },

                  {
                    title: this.$i18n.tc('message.partners', 2),
                    route: 'partners',
                    image_url: ''
                  },

                  {
                    title: this.$i18n.tc('message.appointments', 2),
                    route: 'appointments',
                    image_url: ''
                  },

                  {
                    title: this.$i18n.tc('message.contracts', 2),
                    route: 'contracts',
                    image_url: ''
                  },

                  {
                    title: this.$i18n.tc('message.roles', 2),
                    route: 'users',
                    image_url: ''
                  },

                  {
                    title: this.$i18n.tc('message.permissions', 2),
                    route: 'users',
                    image_url: ''
                  }
                ]
            }
        }
    }
</script>

<style scoped>

</style>
