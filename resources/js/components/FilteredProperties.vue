<template>
    <nav
        class="g-col-12 g-start-1 g-col-lg-12 g-start-lg-2 featured-tab-groups-head border-color-grey-7 pt-2 filter-container">

        <ul class="button-list nav nav-tabs nav-tabs--featured-tab-groups" role="tablist">
            <li class="button-list-item nav-item" :class="{ 'text-black': isNotHome }" role="presentation">
                <button class="custom-button nav-link active" :class="sale ?? 'active'" id="villas-new-tab"
                    data-tab-has-flickity data-bs-toggle="tab" data-bs-target="#villas-new-tab-pane" type="button"
                    role="tab" aria-controls="villas-new-tab-pane" aria-selected="true" @click="updated('sale')">Sale
                </button>
            </li>
            <li class="nav-item" role="presentation" :class="{ 'text-black': isNotHome }">
                <button class="custom-button nav-link " :class="rent ?? 'active'" id="villas-reductions-tab"
                    data-tab-has-flickity data-bs-toggle="tab" data-bs-target="#villas-new-tab-pane" type="button"
                    role="tab" aria-controls="villas-reductions-tab-pane" aria-selected="true"
                    @click="updated('rent')">Rent</button>
            </li>
        </ul>

    </nav>
    <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 p-0 tab-content property-card-scroller-grid-item border-bottom">
        <div class="tab-pane fade show active" id="villas-new-tab-pane" role="tabpanel" aria-labelledby="villas-new-tab"
            tabindex="0">
            <div class="property-card-scroller pb-3 mb-0">
                <div class="loader-grid" v-if="loading">
                    <code-loader :speed="2" v-for="index in 9" :key="index"></code-loader>
                </div>
                <ul class="property-card-grid-scroller" v-else>
                    <li class="property-card-grid-scroller__item property-card-grid__item" v-if="!nowCurrentPage"
                        v-for="(item, index) in listings.properties">
                        <article class="property-card" data-property-card>
                            <div class="property-card__body">
                                <div class="property-card__info property-card__style"
                                    @click="goToPropertyDetail(item.slug)">
                                    <div class="property-card__style__inside">
                                        <div>
                                            <h3 class="property-card__title">
                                                <a class="property-card__link" data-property-card-link>{{ item.propertyName
                                                }}</a>
                                            </h3>
                                            <span>{{ item.areaName }} </span>
                                        </div>
                                        <div style="text-align:right">
                                            <span>AED {{ item.propertyPrice }}</span>

                                        </div>

                                    </div>
                                    <div class="property-card__style__inside">
                                        <div>

                                            <span>
                    <li>{{ item.unitBuiltUpArea }} {{ item.unit }}</li></span>
            </div>
            <div style="text-align:right">
                <span>{{ item.bedrooms != '0' ? item.bedrooms : (item.propertyType == 'Land Residential' ? '' : 'Studio') }}
                    {{ item.bedrooms == '0' ? '' : 'Bedrooms' }}</span>

            </div>

        </div>

    </div>

    </div>

    <div class="property-card__media">
        <div class="property-card-carousel">
            <!-- slider inside the property-card -->
            <swiper :autoplay='{
                "delay": 2000,
                "disableOnInteraction": false
            }' :speed="2000" :pagination='{
    "clickable": true
}' :navigation="true" class="property-card-carousel__cell">
                <swiper-slide class="ratio ratio-4x3" v-for="(item, index) in JSON.parse(item.galleryImages).slice(0,10)">
                    <img :src="backendUrl + item"
                        :srcset="`${backendUrl + item} 320w,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ${backendUrl + item} 440w,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ${backendUrl + item} 560w`"
                        sizes="(min-width: 85em) 384px, (min-width: 78em) calc((100vw - 9rem) / 3), (min-width: 40em) calc((100vw - 6rem) / 2), calc(100vw - 4rem)"
                        :alt="item.slug" class="property-card-carousel__image" loading="lazy" width="560" height="420">

                </swiper-slide>

            </swiper>


        </div>
        <span class="property-card__flag">{{ item.propertyType }}</span>
        <span class="property-card-right__flag" v-if="item.propertyCategory != 'Rent'">{{ item.completionStatus !=
            'completed_property' && item.propertyCategory ==
            'Sale' ? 'Off-plan' : 'Ready' }}</span>
    </div>
    </article>
    </li>

    <li class="property-card-grid-scroller__item" v-else v-for="(item, index) in properties">
        <article class="property-card" data-property-card>
            <div class="property-card__body">
                <div class="property-card__info property-card__style" @click="goToPropertyDetail(item.slug)">
                    <div class="property-card__style__inside">
                        <div>
                            <h3 class="property-card__title">
                                <a class="property-card__link" data-property-card-link>{{ item.propertyName
                                }}</a>
                            </h3>
                            <span>{{ item.areaName }} </span>
                        </div>
                        <div style="text-align:right">
                            <span>AED {{ item.propertyPrice }}</span>

                        </div>

                    </div>
                    <div class="property-card__style__inside">
                        <div>

                            <span>
    <li>{{ item.unitBuiltUpArea }} {{ item.unit }}</li></span>
    </div>
    <div style="text-align:right">
        <span>{{ item.bedrooms != '0' ? item.bedrooms : (item.propertyType == 'Land Residential' ? '' : 'Studio') }}
            {{ item.bedrooms == '0' ? '' : 'Bedrooms' }}</span>

    </div>

    </div>

    </div>
    </div>
    <div class="property-card__media">
        <div class="property-card-carousel">
            <!-- slider inside the property-card -->
            <swiper :autoplay='{
                "delay": 2000,
                "disableOnInteraction": false
            }' :speed="2000" :pagination='{
                "clickable": true
            }' :navigation="true" class="property-card-carousel__cell">
            <swiper-slide class="ratio ratio-4x3" v-for="(item, index) in item.galleryImages.slice(0, 10)">

                    <img :src="backendUrl + item"
                        :srcset="`${backendUrl + item} 320w,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ${backendUrl + item} 440w,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ${backendUrl + item} 560w`"
                        sizes="(min-width: 85em) 384px, (min-width: 78em) calc((100vw - 9rem) / 3), (min-width: 40em) calc((100vw - 6rem) / 2), calc(100vw - 4rem)"
                        alt="Custom Villa with Designer Interiors in The Lakes., picture 1"
                        class="property-card-carousel__image" loading="lazy" width="560" height="420">

                </swiper-slide>

            </swiper>


        </div>
        <span class="property-card__flag">{{ item.propertyType }}</span>
        <span class="property-card-right__flag" v-if="item.propertyCategory != 'Rent'">{{ item.completionStatus !=
            'completed_property' && item.propertyCategory ==
            'Sale' ? 'Off-plan' : 'Ready' }}</span>
    </div>
    </article>
    </li>


    </ul>
    </div>
    </div>
    <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 align-center mb-6 mt-4">
        <p><router-link to="/properties">View All</router-link></p>
    </div>
    </div>
</template>
<script>
import { mapState, mapActions } from 'vuex';
import { CodeLoader } from 'vue-content-loader';
import { Swiper, SwiperSlide } from 'swiper/vue';
import SwiperCore, {
    Autoplay, Pagination, Navigation, EffectFade
} from 'swiper/core';
SwiperCore.use([Autoplay, Pagination, Navigation, EffectFade]);

export default {
    name: "FilteredProperties",
    components: {
        CodeLoader, Swiper,
        SwiperSlide
    },
    props: {
        propType: String,
        filterData: {
            type: String,
            default: '',
        },
        communityName: {
            type: String,
            default: '',
        },
        listings: {
            type: Array,
        }

    },
    data() {
        return {
            fetchingData: false,
            rent: false,
            sale: true,
            residential: true,
            commercial: false,
            isMobile: false,
            nowCurrentPage: false,
            backendUrl: 'https://a1properties.ae/backend/',
            //backendUrl: 'http://192.168.2.46:8001/'

        }
    },
    created() {

        this.getPropertiesByParams()
        //
        this.checkScreenWidth()

    },
    mounted() {

        window.addEventListener("resize", this.checkScreenWidth);
    },
    computed: {
        ...mapState('properties', ['properties', 'propertiesData', 'loading']),
        isNotHome() {
            return this.$route.path !== '/';
        },

    },
    watch: {
        filterData: 'getPropertiesByParams',
    },
    destroyed() {
        window.removeEventListener("resize", this.checkScreenWidth);
    },
    methods: {
        ...mapActions('properties', ['getProperties', 'getPropertiesByParams']),
        goToPropertyDetail(slug) {
            this.$router.push(`/property/${slug}`);
        },

        updated(tab) {
            this.nowCurrentPage = true,
                // Reset all tabs to false
                this.rent = false;
            this.sale = false;

            // Set the clicked tab to true
            this[tab] = true;

            this.getPropertiesByParams()
        },
        updatedOthers(tab) {
            this.residential = false;
            this.commercial = false;

            // Set the clicked tab to true
            this[tab] = true;

            this.getPropertiesByParams()
        },
        async getPropertiesByParams() {
            const params = {
                // Add your filtering parameters here
                rent: this.rent,
                sale: this.sale,
                areaFilter: this.communityName ?? '',
            };



            try {
                await this.$store.dispatch('properties/getPropertiesByParams', params);

                // Optionally, you can do something after the data is updated
            } catch (error) {
                // Handle the error
            }
        },
        checkScreenWidth() {
            this.isMobile = window.innerWidth <= 600;
        },
    },

}
</script>

<style scoped="scss">
.property-card__flag {
    z-index: 1;
    background-color: #fff;
    margin-left: 0px;
    box-shadow: 2px 2px 2px rgb(31, 31, 31);
}

.property-card-right__flag {
    z-index: 1;
}

.property-card__style {
    display: flex;
    flex-direction: column;
}

.property-card__style__inside {
    display: flex;
    justify-content: space-between;
}

.filter-container {
    display: flex;
    justify-content: center;
    flex-wrap: nowrap;
    /* Ensure buttons stay on the same row */
}

.button-list {
    list-style-type: none;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    list-style: none;
    padding: 0;
}

.property-card-grid__item {
    background-color: #fff;
    padding: 10px;
    color: white;
    border-radius: 10px
}

.button-list-item {
    flex: 1;
}

.custom-button {
    width: 150px !important;
    color: #fff;
    font-weight: 600;
    display: block;
    width: 100%;
    padding: 5px 10px;
    text-align: center;
    border: none;
    transition: background-color 0.3s;
    margin-right: 2px;

}

.custom-button:hover {
    color: #fff;
}

.custom-button.active {
    color: #fff;
    border-bottom: 1px solid #c67057;
}

.form-select {
    color: black;
    border-color: black;
}

.form-select option {
    font-weight: 600;
}

.button-list {
    display: flex;
    justify-content: center;
    align-items: center;
    list-style: none;
    padding: 0;
}

.button-list-item {
    flex: 1;
    margin: 0 5px;
    /* Adjust the margin between buttons as needed */
}

.text-black .custom-button {
    color: #000;
}

@media only screen and (max-width: 600px) {
    .filter-container {
        display: flex;
        justify-content: center;
        flex-wrap: nowrap;
        /* Ensure buttons stay on the same row */
    }

    .button-list {
        list-style-type: none;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .button-list-item {
        flex: 0;
    }

    .custom-button {
        width: auto !important;
        font-size: 13px;
    }

    .featured-tab-groups-head {
        display: flex;
        flex-direction: row;
        gap: .5rem
    }

    .horizontal-line {
        border-right: 1px solid #c67058;
    }
}
</style>
