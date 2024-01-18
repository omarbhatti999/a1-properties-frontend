<template>
    <div id="onetap-wrapper" class="onetap-wrapper"></div>
    <Header></Header>
    <main>
        <article class="vstack gap-9 pt-6 pb-5">
            <section class="page-entry">
                <header class="g-col-3 g-col-lg-12 g-start-lg-2 text-center">
                    <div class="g-col-1 g-start-2 g-col-lg-4 g-start-lg-2 logo-developers">
                        <img :src="item.featuredImage" :alt="item.slug" class="info-card__image">
                    </div>
                </header>


                <div class="g-col-3 g-col-lg-12 g-start-lg-2">
                    <div class="">
                        <div :style="contentStyle" v-html="item.developerInfo"></div>
                        <a class="btn-readmore mb-0 pb-0" @click="toggleContent()">{{ isTruncated ? 'Read more'
                            :
                            'Show less' }}</a>
                    </div>

                </div>
            </section>
            <section class="page-entry mt-0 mb-0">
                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2">
                    <h3 class="mb-0 listing-body__heading">Projects by {{ item.developerName }}</h3>
                    <FeaturedDevelopments></FeaturedDevelopments>
                </div>

                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2">
                    <h3 class="mb-5 listing-body__heading">Communities by {{ item.developerName }}</h3>
                    <FeaturedCommunities></FeaturedCommunities>
                </div>
                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2">
                    <h3 class="mb-0 listing-body__heading">Properties by {{ item.developerName }}</h3>
                    <FeaturedProperties></FeaturedProperties>
                </div>
            </section>

        </article>
    </main>
    <Footer></Footer>
</template>
<script>
import Nav from '../components/Nav.vue';
import Header from '../components/Header.vue';
import Footer from '../components/Footer.vue';
import FeaturedDevelopments from '../components/FeaturedDevelopments.vue';
import FilteredDevelopmentsSwiper from '../components/FilteredDevelopmentsSwiper.vue';
import FeaturedCommunities from '../components/FeaturedCommunities.vue';
import SearchFilterDropdown from '../components/SearchFilterModal.vue';
import axios from '../axios';
import FeaturedProperties from '../components/FeaturedProperties.vue';
export default {
    components: {
        Nav, Header, Footer, SearchFilterDropdown, FeaturedDevelopments, FilteredDevelopmentsSwiper,
        FeaturedProperties, FeaturedCommunities
    },

    data() {
        return {
            developersList: [],
            pagination: [],
            maxLines: 4.5,
            isTruncated: true
        }
    },
    computed: {

    },
    props: {
        slug: {
            type: String,
            required: true,
        },
        item: {
            type: Object,
            required: true,
        },
    },
    created() {
    },
    mounted() {
    },
    computed: {
        contentStyle() {
            if (this.isTruncated) {
                return {
                    overflow: 'hidden',
                    display: '-webkit-box',
                    '-webkit-line-clamp': this.maxLines,
                    '-webkit-box-orient': 'vertical',
                    'max-height': `${this.maxLines * 24}px`, // Adjust the line height accordingly
                };
            } else {
                return {
                    overflow: 'auto', // Adjust the overflow style as needed
                };
            }
        }
    },
    methods: {
        toggleContent() {
            this.isTruncated = !this.isTruncated;
        },
    },

}
</script>

<style scoped="scss">
.logo-developers {
    width: 200px;
    height: 100px;
    margin: auto;
}

.btn-readmore {
    cursor: pointer;
}
</style>
