<template>
    <nav class="nav-tray">
        <ul class="nav-tray-list">
            <li class="nav-tray-list__item">
                <router-link to="/">
                    <a class="masthead-logo__link" aria-label="Homepage">
                        <img rel="preload" as="mbl-logo" class="logo-mbl" src="https://a1properties.ae/backend/storage/a1/logo/c/a1-logo-black-mbl.webp">
                    </a>
                </router-link>
            </li>

            <li class="nav-tray-list__item">
                <div class="">
                    <Nav></Nav>
                </div>
            </li>
        </ul>
    </nav>
</template>


<script>
import Nav from './Nav.vue';

export default {
    name: 'MobileNav',
    components: {
        Nav
    },
    data() {
        return {
            homeRoute: '#000',
        };
    },
    mounted() {

    },
    computed: {
        strokeColor() {
            return this.$route.path === '/' ? '#fff' : this.homeRoute;
        },

        isHomePage() {
            // Check if the current route is the homepage
            return this.$route.path === '/';
        },
    },
    beforeUnmount() {
    },
    created() {
    },
    methods: {
        teamPage() {
            this.$router.push(`/team`);

        },
    },
}
</script>
<style scoped="scss">
@media only screen and (max-width: 600px) {

    .logo-mbl {
        width: 180px;
    }
}
</style>
