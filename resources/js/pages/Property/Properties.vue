<template>
    <div class="loader-grid" v-if="loading">
        <code-loader :speed="2" v-for="index in 9" :key="index"></code-loader>
    </div>
    <ul class="property-card-grid" v-else>
        <li class="property-card-grid__item" v-for="(item, index) in properties">
            <article class="property-card">
                <div class="property-card__body">
                    <div class="property-card__info" @click="goToPropertyDetail(item.slug)">

                        <h3 class="property-card__title mb-3">
                            <a href="#" class="property-card__link">{{ item.metaTitle }} </a>
                        </h3>

                      <div class="title_section">
                            <div class="col-lg-6">

                                <span><svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px"
                                        viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                                        <path fill="#231F20"
                                            d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24
                               C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24
                               C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z" />
                                    </svg>
                                    {{ item.developmentName }} {{ item.developmentName != '' ? '|' : '' }} {{ item.areaName }}</span>
                            </div>

                            <div class="col-lg-6" style="text-align:right">
                                <svg fill="#000000" width="20px" height="20px" viewBox="0 0 16 16"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.75 2.5H1.25A1.25 1.25 0 0 0 0 3.75v8.5a1.25 1.25 0 0 0 1.25 1.25h13.5A1.25 1.25 0 0 0 16 12.25v-8.5a1.25 1.25 0 0 0-1.25-1.25zM1.25 3.75h2a1.86 1.86 0 0 1-2 1.75zm0 8.5V10.5a1.86 1.86 0 0 1 2 1.75zm13.5 0H12.8a1.86 1.86 0 0 1 1.95-1.75zm0-3a3.1 3.1 0 0 0-3.2 3h-7.1a3.1 3.1 0 0 0-3.2-3v-2.5a3.1 3.1 0 0 0 3.2-3h7.1a3.1 3.1 0 0 0 3.2 3zm0-3.75a1.86 1.86 0 0 1-1.95-1.75h1.95z" />
                                    <path
                                        d="M8 5a3.1 3.1 0 0 0-3.2 3A3.1 3.1 0 0 0 8 11a3.1 3.1 0 0 0 3.2-3A3.1 3.1 0 0 0 8 5zm0 4.75A1.86 1.86 0 0 1 6.05 8 1.86 1.86 0 0 1 8 6.25 1.86 1.86 0 0 1 10 8a1.86 1.86 0 0 1-2 1.75z" />
                                </svg>&nbsp;
                                <span> AED {{ item.propertyPrice }} </span>

                            </div>

                        </div>
                        <div class="property-listing-card mt-2">

                            <div>
                                <svg v-if="item.bedrooms != '0' ? item.bedrooms : (item.propertyType == 'Land Residential' ? '' : 'Studio')"
                                    fill="#000000" width="20px" height="20px" viewBox="0 0 24 24" id="bedroom"
                                    data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line">
                                    <path id="secondary"
                                        d="M4,12H20a1,1,0,0,1,1,1v3a0,0,0,0,1,0,0H3a0,0,0,0,1,0,0V13A1,1,0,0,1,4,12Z"
                                        style="fill: rgb(103, 103, 103); stroke-width: 2;"></path>
                                    <path id="primary"
                                        d="M19,7a1,1,0,0,0-1-1H6A1,1,0,0,0,5,7v5H19Zm1,11V16M4,18V16m17,0H3V13a1,1,0,0,1,1-1H20a1,1,0,0,1,1,1Z"
                                        style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                                    </path>
                                </svg>
                                {{ item.bedrooms != '0' ? item.bedrooms : (item.propertyType == 'Land Residential' ? '' :
                                    'Studio') }} {{ item.bedrooms == '0' ? '' : 'Beds' }}
                            </div>
                            <div
                                v-if="item.bedrooms != '0' ? item.bedrooms : (item.propertyType == 'Land Residential' ? '' : 'Studio')">
                                <svg fill="#000000" height="20px" width="20px" version="1.1" id="Capa_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 211.667 211.667" xml:space="preserve">
                                    <path d="M211.667,98.551c0,2.209-1.791,4-4,4H201v26.448c0,13.403-7.085,25.178-17.702,31.792l7.999,14.878
	c1.046,1.946,0.317,4.371-1.629,5.418c-0.603,0.323-1.251,0.478-1.891,0.478c-1.425,0-2.804-0.764-3.526-2.106l-8.164-15.186
	c-3.918,1.395-8.131,2.161-12.522,2.161H48.102c-3.755,0-7.38-0.562-10.802-1.595l-7.86,14.62c-0.722,1.343-2.102,2.106-3.526,2.106
	c-0.64,0-1.288-0.154-1.891-0.478c-1.946-1.047-2.675-3.472-1.629-5.418l7.512-13.972c-11.465-6.406-19.239-18.659-19.239-32.699
	v-26.448H4c-2.209,0-4-1.791-4-4s1.791-4,4-4h10.667H197h10.667C209.876,94.551,211.667,96.342,211.667,98.551z M4,60.814h43.083
	c3.584,0,6.5,2.916,6.5,6.5v8.5c0,2.209,1.791,4,4,4s4-1.791,4-4v-8.5c0-7.995-6.505-14.5-14.5-14.5H4c-2.209,0-4,1.791-4,4
	S1.791,60.814,4,60.814z M9.25,48.602h6.833c2.209,0,4-1.791,4-4v-10.5c0-2.209-1.791-4-4-4H9.25c-5.101,0-9.25,4.149-9.25,9.25
	S4.149,48.602,9.25,48.602z" />
                                </svg>
                                {{ item.bathrooms }} Baths
                            </div>
                            <div>
                                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 2C6.94493 2.0073 4.8215 2.10686 3.46447 3.46389C2 4.92835 2 7.28538 2 11.9994C2 16.7135 2 19.0705 3.46447 20.535C4.92893 21.9994 7.28596 21.9994 12 21.9994C16.714 21.9994 19.0711 21.9994 20.5355 20.535C21.8926 19.1779 21.9921 17.0545 21.9994 12.9994"
                                        stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                                    <path d="M13 11L22 2M22 2H16.6562M22 2V7.34375M21 3L12 12M12 12H16M12 12V8"
                                        stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                {{ item.unitBuiltUpArea }} {{ item.unit == 'Sq.Ft.' ? 'Sq. Ft.' : 'Sq. Mt.' }}
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

                                <img :src="backendUrl+item"
                                    :srcset="`${backendUrl+item} 320w,
                                                                                                                                                                                                                                         ${backendUrl+item} 440w,
                                                                                                                                                                                                                                         ${backendUrl+item} 560w`"
                                    sizes="(min-width: 85em) 384px, (min-width: 78em) calc((100vw - 9rem) / 3), (min-width: 40em) calc((100vw - 6rem) / 2), calc(100vw - 4rem)"
                                    alt="Custom Villa with Designer Interiors in The Lakes., picture 1"
                                    class="property-card-carousel__image" loading="lazy" width="560" height="420">

                            </swiper-slide>

                        </swiper>


                    </div>
                    <span class="property-card__flag">{{ item.propertyType }}</span>
                    <span class="property-card-right__flag">{{ item.completionStatus != 'completed_property' &&
                        item.propertyCategory == 'Sale' ? 'Off-plan' : 'Ready' }}</span>

                </div>
            </article>
        </li>

    </ul>
    <div class="mb-10">
        <a class="btn btn-block btn-transparent btn-load-more" @click="loadMoreProperties(propertiesData.currentPage)">Load
            more</a>
            <br>
            <div class="mt-3 count-text">
                <span>{{propertiesData.currentPage * propertiesData.perPage}} of {{propertiesData.total}}</span>
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
    name: "Properties",
    components: {
        CodeLoader, Swiper,
        SwiperSlide
    },
    props: {
        type: String, // Declare a prop named 'message'
    },
    data() {
        return {
            backendUrl: 'https://a1properties.ae/backend/'

            // backendUrl:'http://192.168.2.46:8000/'
        }
    },
    created() {
        this.getProperties();
    },
    mounted() {
    },
    computed: {
        ...mapState('properties', ['properties','propertiesData', 'loading']),
    },
    methods: {
        ...mapActions('properties', ['getProperties', 'getPropertyBySlug']),
        goToPropertyDetail(slug) {
            this.$router.push(`/property/${slug}`);
        },
        loadMoreProperties(page) {
            this.getProperties(page + 1);
        },
    },
}
</script>

<style scoped="scss">

.carousel {
    max-height: 400px;
}

.property-card__flag {
    z-index: 1;
}

.property-card-right__flag {
    z-index: 1;
}

.carousel-image {
    /* You can adjust the max height as needed */
    width: auto;
    margin: 0 auto;
}

.property-listing-card {
    display: flex;
    justify-content: space-between;
}

.property-card-grid__item {
    background-color: #fff;
    padding: 10px;
    color: white;
    border-radius: 10px;

}

.title_section {
    display: flex;
    justify-content: space-between;

}

.property-price-section {
    align-content: right;
}

@media (min-width:1200px) {
    .gallery-images {
        height: 250px;
    }
}

@media (min-width:1080px) {
    .gallery-images {
        height: 250px;
    }
}


@media (min-width:780px) {
    .gallery-images {
        height: 280px;
    }
}

@media (min-width:650px) {
    .gallery-images {
        height: 280px;
    }
}

@media (min-width:560px) {
    .gallery-images {
        height: 250px;
    }
}

.btn-load-more {
    border: 2px solid #000;
}

.btn-load-more:hover {
    bottom: 0;
    right: 0;
    border-image-source: linear-gradient(to bottom right, #c67067, transparent 35%, transparent 35%, transparent 65%, #c67067);
    border-image-slice: 1;
    border-image-width: 1;
    border-image-outset: 0;
    border-image-repeat: stretch;
}
</style>
