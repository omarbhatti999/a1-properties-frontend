<template>
    <div id="onetap-wrapper" class="onetap-wrapper"></div>
    <Header></Header>
    <main>
        <div class="pt-6 pb-9">
            <section class="page-entry">
                <div class="g-col-3 g-start-1 g-col-lg-8 g-start-lg-4">
                    <div class="text-center">
                        <h1 class="">Developers</h1>
                        <h4 class="display-7 ">
                            We have established relationships and collaborations with the most prominent and reputable
                            developers in the region, allowing us to offer our clients a wide range of high-quality
                            properties to choose from. Additionally, we are also partnered with major mortgage providers,
                            which enables us to provide our clients with various financing options to suit their needs and
                            budget.
                        </h4>
                    </div>
                </div>
                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2">
                    <div class="loader-grid" v-if="loading">
                        <code-loader :speed="2" v-for="index in 9" :key="index"></code-loader>
                    </div>
                    <ul class="property-card-grid" v-else>
                        <li class="property-card-grid__item" v-for="(item, index) in developers" :key="index">
                            <article class="info-card location-card">
                                <div class="ratio ratio-4x3 logo-developers">
                                    <img :src="item.featuredImage" :alt="item.slug" class="info-card__image">
                                </div>
                                <div class="info-card__body iw-card__body text-center">

                                    <router-link :data="item"
                                        :to="{ name: 'developerDetail', params: { slug: item.slug }, query: { ...item } }"><a
                                            class="info-card__link" data-property-card-link>View projects</a></router-link>
                                </div>
                            </article>
                        </li>
                    </ul>

                </div>
            </section>
        </div>
    </main>
    <Footer></Footer>
</template>
<script>
import Nav from '../components/Nav.vue';
import Header from '../components/Header.vue';
import Footer from '../components/Footer.vue';
import SearchFilterDropdown from '../components/SearchFilterModal.vue';
import axios from '../axios';
import { mapState, mapActions } from 'vuex';
import { CodeLoader } from 'vue-content-loader';

export default {
    components: {
        Nav, Header, Footer, SearchFilterDropdown, CodeLoader
    },
    data() {
        return {
            pagination: [],
        }
    },
    created() {
        this.getDevelopers();

    },
    mounted() {
    },
    computed: {
        ...mapState("developer", ["developers", "loading"])
    },
    methods: {
        ...mapActions("developer", ["getDevelopers"])
    },

}
</script>

<style scoped="scss">
.logo-developers {
    width: 200px;
    height: 100px;
    margin: auto;
}
</style>
