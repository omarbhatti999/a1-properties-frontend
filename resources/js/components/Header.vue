<template>
    <header class="site-header site-header--fixed" data-site-header data-theme="">
        <div class="wrapper">
            <div class="masthead">
                <div class="masthead-logo">
                    <router-link to="/">
                        <a class="masthead-logo__link" aria-label="Homepage">
                            <img loading="eager" class="main-logo" style="width:250px;"
                                :src="backendUrl+'storage/a1/logo/c/a1-logo-black.webp'">
                        </a>
                    </router-link>
                </div>
                <div class="dropdown masthead-navs d-lg-flex gap-3 justify-content-end align-items-center gap-2">
                    <Nav></Nav>
                </div>
            </div>
        </div>
        <MobileNav></MobileNav>
    </header>
</template>
<script>
import Nav from './Nav.vue';
import MobileNav from './MobileNav.vue';
export default {
    name: 'Header',
    components: {
        Nav,
        MobileNav

    },
    data() {
        return {
            backendUrl: 'https://a1properties.ae/backend/'
            // backendUrl: 'http://192.168.2.46:8000/'

        }
    },
}
</script>
