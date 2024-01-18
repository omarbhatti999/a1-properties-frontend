<template>
    <div id="onetap-wrapper" class="onetap-wrapper"></div>
    <Header></Header>
    <main>
        <div class="page-entry pt-6 pb-5">
            <div class="g-col-1 g-start-2 g-col-lg-8 g-start-lg-4 text-center" v-if="area">
                <h1 class="mb-2">{{ area.name }}</h1>
                <p></p>
            </div>
            <div class="g-col-3 g-start-1 g-col-lg-14 pb-0" v-if="area">
                <swiper :autoplay='{
                    "delay": 2000,
                    "disableOnInteraction": false
                }' :speed="2000" class="swiper-slider" :effect="'coverflow'" :grabCursor="true" :centeredSlides="false"
                    :slidesPerView="'auto'" :coverflowEffect="{
                        rotate: 50,
                        stretch: 0,
                        depth: 100,
                        modifier: 1,
                        slideShadows: true,
                        scale: 0.8
                    }">
                    <swiper-slide v-for="img in area.galleryImages" :key="img">
                        <div class="loading-message" v-if="!imgLoaded[img]">Loading...</div>
                        <img :src="backendUrl + img" :alt="area.slug" class="listing-photos-grid__image" loading="lazy"
                            @load="imgLoaded[img] = true" @error="imgError = true" />
                    </swiper-slide>


                </swiper>
                <div class="btn-centered">
                    <button class="btn btn-ghost mb-3 btn-block btn-design" data-bs-toggle="modal"
                        data-bs-target="#learnMoreModal" data-alt-label="RegisterInterest"
                        @click="toggleActionButton('REGISTER')">
                        Register your interest
                    </button>
                </div>
            </div>

            <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 pb-5 about-section pt-5">
                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 about-section "
                    style="border-top:0.7px solid #c67057;">
                </div>
                <h2 class="mb-0 listing-body__heading ">About</h2>

                <div class="pt-2 mb-3" v-if="area" :style="contentStyle" v-html="area.articleData">

                </div>



                <a class="btn-readmore mb-0 pb-0" @click="toggleContent()">{{ isTruncated ? 'Read more'
                    :
                    'Show less' }}</a>

            </div>
            <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2">

                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 border-bottom pb-5 about-section">

                    <h2 class="mb-0 listing-body__heading mb-3 ">Key Features</h2>
                    <div class="mb-5">

                        <ul class="" v-if="area" v-for="desc in area.featuredDesc">
                            <li>{{ desc }}</li>
                        </ul>
                    </div>



                    <div class="border-top pt-5 mb-0 pb-0 mt-0 gallery-section">
                        <h2 class="">Gallery
                        </h2>
                        <div class="listing-photos-grid" v-if="area">
                            <button class="listing-photos-grid__item listing-photos-grid__item--lead" data-bs-toggle="modal"
                                data-bs-target="#listing-photos">
                                <img :src="backendUrl + area.galleryImages[0]" :alt="area.slug"
                                    class="listing-photos-grid__image" loading="lazy" width="560" height="420">
                            </button>
                            <button class="listing-photos-grid__item" data-bs-toggle="modal"
                                data-bs-target="#listing-photos">
                                <img :src="backendUrl + area.galleryImages[1]" :alt="area.slug"
                                    class="listing-photos-grid__image" loading="lazy" width="560" height="420">
                            </button>
                            <button class="listing-photos-grid__item" data-bs-toggle="modal"
                                data-bs-target="#listing-photos">
                                <img :src="backendUrl + area.galleryImages[2]" :alt="area.slug"
                                    class="listing-photos-grid__image" loading="lazy" width="560" height="420">
                            </button>
                        </div>
                        <div class="btn-centered pb-5 mb-0 btn-video">
                            <button class="btn btn-ghost mt-3 btn-block btn-design">
                                Area Video
                            </button>
                        </div>

                    </div>



                </div>
            </div>

            <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 pt-0" style="margin-top:-30px">

                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 p-0">
                    <h2 class="text-center" v-if="area">Projects in {{ area.name }}
                    </h2>
                    <FilteredDevelopmentsSwiper v-if="area.projects" :projects="area.projects"></FilteredDevelopmentsSwiper>

                </div>

                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 mb-0 pt-5">
                    <div class="vstack gap-5 text-center">
                        <h2 class="m-0">Properties in {{ area.name }}</h2>

                        <FilteredProperties :listings="area.listings" :communityName="area.name"></FilteredProperties>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="development-map" tabindex="-1" aria-labelledby="listing-map-modal-title"
            aria-hidden="true">
            <div class="modal-dialog modal-fullscreen modal-map">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="location-map"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //modal for gallery -->
        <div class="modal fade " id="listing-photos" tabindex="-1" aria-labelledby="listing-photos-modal-title"
            aria-hidden="true">
            <div class="modal-dialog modal-xl ">
                <div class="">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>

                </div>
                <div class="modal-content">

                    <div class="modal-body">

                        <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel" v-if="area">
                            <div class="carousel-indicators">
                                <button v-for="(image, key) in area.galleryImages" :key="key" type="button"
                                    data-bs-target="#carouselExampleCaptions2" :data-bs-slide-to="key"
                                    :class="{ 'active': key === 0 }" aria-label="Slide 1"></button>
                            </div>
                            <div class="carousel-inner">
                                <div v-for="(image, key) in area.galleryImages" :key="key" class="carousel-item"
                                    :class="{ 'active': key === 0 }">
                                    <img :src="backendUrl + image" class="image-cropped" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <RegisterOrRequestForm :formType="formType"></RegisterOrRequestForm>
    </main>
    <FooterRequestCallbackModal></FooterRequestCallbackModal>

    <Footer></Footer>
</template>
<script>
import Nav from '../components/Nav.vue';
import Header from '../components/Header.vue';
import SearchFilterModal from '../components/SearchFilterModal.vue';
import RegisterOrRequestForm from '../components/RegisterOrRequestForm.vue';
import FilteredDevelopmentsSwiper from '../components/FilteredDevelopmentsSwiper.vue';
import FilteredProperties from '../components/FilteredProperties.vue';
import Footer from '../components/Footer.vue';
import { mapState, mapActions } from 'vuex';
import { Swiper, SwiperSlide } from 'swiper/vue';

// Import Swiper styles
import 'swiper/swiper.scss';

import "swiper/components/effect-coverflow/effect-coverflow.min.css"
import "swiper/components/pagination/pagination.min.css"
import FooterRequestCallbackModal from '../components/FooterRequestCallbackModal.vue';


// import Swiper core and required modules
import SwiperCore, {
    Autoplay,
    EffectCoverflow, Pagination
} from 'swiper/core';

// install Swiper modules
SwiperCore.use([Autoplay, EffectCoverflow, Pagination]);

export default {
    name: "AreaDetail",
    components: {
        Nav, Header, SearchFilterModal, Footer, RegisterOrRequestForm, FilteredDevelopmentsSwiper,
        Swiper,
        SwiperSlide,
        FilteredProperties,
        FooterRequestCallbackModal

    },
    setup() {
        const onSwiper = (swiper) => {
        };
        const onSlideChange = () => {
        };
        return {
            onSwiper,
            onSlideChange,
            modules: [EffectCoverflow],
        };
    },
    data() {
        return {
            imgLoaded: {}, // Track the loading status of each image
            imgError: false,
            maxLines: 10,
            isTruncated: true,
            formType: 'REQUEST',
            filter: true,
            backendUrl: 'https://a1properties.ae/backend/',
            // backendUrl: 'http://192.168.2.46:8000/',
        }
    },
    computed: {
        ...mapState("area", ["area"]),
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
        ...mapActions("area", ["getAreaBySlug"]),
        toggleContent() {
            this.isTruncated = !this.isTruncated;
        },
        toggleActionButton(type) {

            this.formType = type;
        }
    },

    created() {
        const slug = this.$route.params.slug;
        this.getAreaBySlug(slug);

        this.$watch(
            () => this.$route.params.slug,
            async (newSlug, oldSlug) => {
                // Fetch data when the slug parameter changes
                if (newSlug !== oldSlug) {
                     this.getAreaBySlug(newSlug);
                }
            }
        );
    },


}
</script>
<style scoped="scss">
.image-container {
    position: relative;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.loading-message {
    position: absolute;
    justify-content: center;
    align-items: center;
    background: rgba(255, 255, 255, 0.8);
    /* Semi-transparent white background */
    padding: 10px;
    border-radius: 5px;
    font-size: 16px;
}

.image-cropped {
    width: 100%;
    object-fit: cover;
    object-position: center;
    height: 70vh;
}

.aminities_list {
    display: flex;
    justify-content: space-between;
}

.amenity-item {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.amenity-text {
    margin-top: 5px;
    font-weight: 500;
    text-align: center;
}

.btn-centered {
    display: flex;
    justify-content: center;
    flex-wrap: nowrap;
    text-align: center;
}

.finance-steps {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 0px;
    list-style: none;
    padding: 0;
    width: 90%;
    margin: auto;
}

.arrow-between svg {
    width: 20px;
    /* Adjust the width as needed */
    height: 20px;
    /* Adjust the height as needed */
}

.finance-steps__item {
    flex: 1;
    margin: 0 50px;
    /* Adjust the margin value as needed */
}

.btn-design:hover {
    bottom: 0;
    right: 0;
    border-image-source: linear-gradient(to bottom right, #c67067, transparent 35%, transparent 35%, transparent 65%, #c67067);
    border-image-slice: 1;
    border-image-width: 1;
    border-image-outset: 0;
    border-image-repeat: stretch;
}

@media only screen and (max-width: 600px) {
    .swiper-slide {
        height: 350px !important;
        width: 300px !important;
        background-position: center !important;
        background-size: cover !important;
    }

    .swiper-container {
        height: 400px !important;
    }

    .amenity-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 40%;
        margin: 5px;
    }

    .modal-dialog {
        margin-top: 40%;
        width: 95% !important;
        height: 100px !important;
    }

    .image-cropped {
        width: 100%;
        object-fit: cover;
        object-position: center;
        height: 50vh !important;
    }

    .btn-close {
        position: absolute;
        right: -15px;
        top: -30px;
        font-size: 20px;
        color: #fff;
        font-weight: 800;
        cursor: pointer;
    }
}

.swiper {
    width: 100%;
    padding-top: 50px;
    padding-bottom: 50px;
}

.swiper-slide {
    background-position: center;
    background-size: cover;
    width: 550px;
    height: 500px;
    font-size: 24px;
    font-weight: 700;
    display: flex;
    justify-content: center;
    align-items: center;
    object-fit: cover;
    box-shadow: 0px 10px 8px 0px rgba(0, 0, 0, 0.6);

}

.swiper-container {
    height: 550px;
}

.btn-video {
    margin-bottom: -30px !important;
}

.about-section {
    margin-top: -30px;
}

.btn-readmore {
    cursor: pointer;
}

.floor-plan-section {
    /* Adjust the overall size of the section if needed */
    max-width: 800px;
    margin: auto;
}

.floor-plan-grid {
    /* Adjust the spacing between images if needed */
    gap: 10px;
}

.floor-plan-images {
    /* Set a maximum width for each image container */
    max-width: 580px;

    /* Add other styles as needed */
}

.floor-plan-images {
    /* Ensure images do not exceed the container size */
    max-width: 100%;
    height: auto;
    /* Add other styles as needed */
}

.finance-step__num {
    font-size: 25px;
}

.amenities-section img {
    height: 100px;
    width: 100px;

}

.amenities-section span {
    font-size: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    height: 100%;
    /* Ensure the span takes the full height of its container */
}

.amenities-section div {
    display: flex;
    justify-content: center;
    flex-wrap: nowrap;
    text-align: center;
}

.amenity-heading {
    font-weight: 700;
}

.maplibregl-ctrl-attrib.maplibregl-compact-show {
    display: none !important;
}

.modal-body {
    padding: 5px;
}

.modal-dialog {
    width: 150vh;
    height: 80vh;
}

.image-cropped {
    width: 100%;
    object-fit: cover;
    object-position: center;
    height: 80vh;
}

.btn-close {
    position: absolute;
    right: -20px;
    top: -30px;
    color: white;
    cursor: pointer;
}
</style>
