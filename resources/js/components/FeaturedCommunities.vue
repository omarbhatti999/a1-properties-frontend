<template>
    <!-- Featured Communites Section -->
    <div
        class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 p-0 tab-content property-card-scroller-grid-item mt-0 inside-section-pad">
        <!-- Desktop -->
        <div class="pb-5" v-if="!isMobile">
            <span v-if="!isMobile" class="icon-left" @click="prevSlide()">
                <svg fill="#fff" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.949 511.949" xml:space="preserve"
                    transform="rotate(180)" :class="{ 'safari-fix': isSafari }">

                    <g id="SVGRepo_bgCarrier" stroke-width="0" />

                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                    <g id="SVGRepo_iconCarrier">
                        <g>
                            <g>
                                <path
                                    d="M386.235,248.308L140.902,2.975c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 l-237.76,237.867c-4.267,4.053-4.373,10.88-0.213,15.04c4.053,4.267,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 l245.333-245.333C390.395,259.188,390.395,252.468,386.235,248.308z" />
                            </g>
                        </g>
                    </g>

                </svg>

            </span>

            <!-- Previous Icon -->
            <div class="property-card-grid-scroller" v-if="loading">
                <code-loader :speed="2" v-for="index in 3" :key="index"></code-loader>
            </div>
            <swiper :slides-per-view="4" :space-between="40" @swiper="onSwiper" @slideChange="onSlideChange"
                class="property-card-grid-scroller property-card-slider" ref="swiper">
                <swiper-slide v-for="(item,index) in areas" :key="item.id" class="property-card-grid-scroller__item"
                    :class="{ 'property-card-slider_item': !isMobile }" @mouseover="handleHover(true, index)"
                    @mouseleave="handleHover(false)" @click="gotToAreaDetail(item.slug)">
                    <article class="development-card location-card" :data-id="index">
                        <div class="development-card__media iw-card__media">
                            <div class="ratio ratio-4x5 iw-card__image post-card-image-border">
                                <img :src="item.featuredImage"
                                    :srcset="`${item.featuredImage} 320w,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ${item.featuredImage} 440w,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ${item.featuredImage} 560w`"
                                    sizes="(min-width: 85em) 384px, (min-width: 78em) calc((100vw - 9rem) / 3), (min-width: 40em) calc((100vw - 6rem) / 2), calc(100vw - 4rem)"
                                    class="development-card__image" width="1920" height="1080" :alt="item.slug" />
                                <div v-if="isHovered && index === activeIndex" class="overlay"
                                    :class="{ 'safari-fix-overlay': isSafari }">
                                    <h5 class="overlay-text">
                                        <ul class="area-details-list" v-for="description in item.featuredDesc">
                                            <li>{{ description }}</li>
                                        </ul>
                                    </h5>
                                </div>

                                <h5 class="development-card__heading">
                                    <a class="development-card__link">{{ item.name }}</a>
                                </h5>

                            </div>
                        </div>
                    </article>
                </swiper-slide>
            </swiper>
            <span v-if="!isMobile" class="icon-right" @click="nextSlide()">
                <svg fill="#fff" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.949 511.949" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M386.235,248.308L140.902,2.975c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76
			l-237.76,237.867c-4.267,4.053-4.373,10.88-0.213,15.04c4.053,4.267,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213
			l245.333-245.333C390.395,259.188,390.395,252.468,386.235,248.308z" />
                        </g>
                    </g>
                </svg>
            </span>

        </div>

        <!-- Only For Mobile -->
        <div class="property-card-scroller pb-5" v-else>
            <span v-if="!isMobile" class="icon-left">
                <svg fill="#fff" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.949 511.949" xml:space="preserve"
                    transform="rotate(180)">

                    <g id="SVGRepo_bgCarrier" stroke-width="0" />

                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                    <g id="SVGRepo_iconCarrier">
                        <g>
                            <g>
                                <path
                                    d="M386.235,248.308L140.902,2.975c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 l-237.76,237.867c-4.267,4.053-4.373,10.88-0.213,15.04c4.053,4.267,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 l245.333-245.333C390.395,259.188,390.395,252.468,386.235,248.308z" />
                            </g>
                        </g>
                    </g>

                </svg>

            </span>

            <!-- Previous Icon -->
            <div class="property-card-grid-scroller" v-if="loading">
                <code-loader :speed="2" v-for="index in 3" :key="index"></code-loader>
            </div>

            <ul ref="propertyCardSlider" class="property-card-grid-scroller" :class="{ 'property-card-slider': !isMobile }"
                v-else>
                <li v-for="(item,index) in areas" :key="item.id" class="property-card-grid-scroller__item"
                    :class="{ 'property-card-slider_item': !isMobile }" @mouseover="handleHover(true, index)"
                    @mouseleave="handleHover(false)" @click="gotToAreaDetail(item.slug)">
                    <article class="development-card location-card" :data-id="index">
                        <div class="development-card__media iw-card__media">
                            <div class="ratio ratio-4x5 iw-card__image post-card-image-border">
                                <img :src="item.featuredImage" rel="preload"
                                    :srcset="`${item.featuredImage} 320w,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ${item.featuredImage} 440w,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ${item.featuredImage} 560w`"
                                    sizes="(min-width: 85em) 384px, (min-width: 78em) calc((100vw - 9rem) / 3), (min-width: 40em) calc((100vw - 6rem) / 2), calc(100vw - 4rem)"
                                    class="development-card__image" width="1920" height="1080" :alt="item.slug" />
                                <div v-if="isHovered && index === activeIndex" class="overlay">
                                    <h5 class="overlay-text">
                                        <ul class="area-details-list" v-for="description in item.featuredDesc">
                                            <li>{{ description }}</li>
                                        </ul>
                                    </h5>
                                </div>
                                <div v-if="isMobile" class="overlay">
                                    <h5 class="overlay-text">
                                        <ul class="area-details-list" v-for="description in item.featuredDesc">
                                            <li>{{ description }}</li>
                                        </ul>
                                    </h5>
                                </div>

                                <h5 class="development-card__heading">
                                    <a class="development-card__link">{{ item.name }}</a>
                                </h5>

                            </div>
                        </div>
                    </article>
                </li>
            </ul>
            <span v-if="!isMobile" class="icon-right" @click="navigate(-1)">
                <svg fill="#fff" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.949 511.949" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M386.235,248.308L140.902,2.975c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76
			l-237.76,237.867c-4.267,4.053-4.373,10.88-0.213,15.04c4.053,4.267,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213
			l245.333-245.333C390.395,259.188,390.395,252.468,386.235,248.308z" />
                        </g>
                    </g>
                </svg>
            </span>

        </div>
    </div>
    <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 align-center mb-3 mt-2">
        <p class="view-all"><router-link to="/communities">View All</router-link></p>
    </div>
</template>
<script>
import { mapState, mapActions } from 'vuex';
import { CodeLoader } from 'vue-content-loader';
import { Swiper, SwiperSlide } from 'swiper/vue';
// import Swiper core and required modules
import SwiperCore, {
    Autoplay, Pagination, Navigation
} from 'swiper/core';
SwiperCore.use([Autoplay, Pagination, Navigation]);

export default {
    name: "FeaturedCommunities",
    components: {
        CodeLoader, Swiper,
        SwiperSlide
    },
    props: {
        propType: String, // Declare a prop named 'message'
    },
    data() {
        return {
            isHovered: false,
            activeIndex: 0,
            scrollPosition: 0,
            isMobile: false,
            isSafari: /^((?!chrome|android).)*safari/i.test(navigator.userAgent),
            allAreasFetched: false,


        }
    },
    setup() {
        return {
            modules: [Navigation],
        };
    },
    created() {
        this.getFeaturedAreas();
        this.checkScreenWidth()
    },
    computed: {
        ...mapState("area", ["areas", "loading"]),
        maxScrollPosition() {
            const container = this.$refs.propertyCardSlider;
            if (container) {
                const itemWidth = container.offsetWidth / 4; // Assuming 4 items are visible at a time
                const itemsInView = 4; // Number of items visible at a time
                return Math.max(0, (this.areas.length - itemsInView) * itemWidth);
            }
            return 0;
        },
    },
    destroyed() {
        window.removeEventListener("resize", this.checkScreenWidth); // Remove the event listener on component destruction
    },
    methods: {
        ...mapActions("area", ["getFeaturedAreas","getAreas"]),
        handleHover(isHovered, index) {
            this.isHovered = isHovered;
            if (isHovered) {
                this.activeIndex = index;
            }
        },
        nextSlide() {
            if (this.swiper) {
                this.swiper.slideNext();
                if(!this.allAreasFetched){
                    this.fetchAllAreas()
                    this.allAreasFetched = true;
                }
            }
        },
        prevSlide() {
            if (this.swiper) {
                this.swiper.slidePrev();
            }
        },
        onSwiper(swiper) {
            // Access to swiper instance
            this.swiper = swiper;
        },
        onSlideChange() {
            // Triggered when slide changes
        },
        checkScreenWidth() {
            this.isMobile = window.innerWidth <= 600;
        },
        gotToAreaDetail(slug) {
            this.$router.push(`/community/${slug}`);
        },
        fetchAllAreas() {
            this.getAreas();
        },

    },
    mounted() {
        this.$nextTick(() => {
            const container = this.$refs.propertyCardSlider;
            if (container) {
                container.style.transition = 'transform 0.3s ease-in-out';
            }
        });
        window.addEventListener("resize", this.checkScreenWidth);
        window.addEventListener('scroll', this.onScroll);

    },
    destroyed() {
        // Remove the event listener when the component is destroyed
        window.removeEventListener("resize", this.checkScreenWidth);
        window.removeEventListener('scroll', this.onScroll);


    }

}
</script>

<style scoped="scss">
.icon-right {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 24px;
    cursor: pointer;
    color: #fff;
}

.icon-left {
    position: absolute;
    top: 50%;
    left: 0%;
    z-index: 1;
    transform: translateY(-50%);
    font-size: 24px;
    cursor: pointer;
    color: #fff;
}

.icon-left {
    left: -50px;
}

.icon-right {
    right: -50px;
}

.property-card__flag {
    margin-left: 0px;
}

.property-card__style {
    display: flex;
    flex-direction: column;
}

.property-card__style__inside {
    display: flex;
    justify-content: space-between;
}

.button-list {
    list-style-type: none;
    padding: 0;
    display: flex;
    justify-content: space-evenly;
    background-color: #f2f2f2;
    border-radius: 0.5rem;
    border: 2px solid #fff
}

.button-list-item {
    flex: 1;
}

.custom-button {
    color: #000;
    font-weight: 600;
    display: block;
    width: 100%;
    padding: 10px 20px;
    text-align: center;
    border: none;
    background-color: #f2f2f2;
    border-radius: 0.5rem;
    transition: background-color 0.3s;
}

.custom-button:hover {
    color: #000;
    background-color: #b1aeae;
}

.custom-button.active {
    color: #fff;
    background-color: #000;
}

.post-card-image-border::after {
    content: '';
    position: absolute;
    top: 15px;
    left: 15px;
    right: 15px;
    bottom: 15px;
    z-index: 1;
    border-left: 5px solid #fff;
    border-right: 5px solid #fff;
    border-image-source: linear-gradient(to top left, rgb(255, 255, 255), transparent 35%, transparent 35%, transparent 65%, rgb(255, 255, 255));
    border-image-slice: 2;
    border-image-width: 0.3;
    border-image-outset: 0;
    border-image-repeat: stretch;
}

.property-card-grid-scroller__item {
    width: 100%;
    position: relative;
    overflow: hidden;
    margin: 0px;
    padding: 0px;
    outline: none;
    border: none;
}

.property-card-grid-scroller {
    margin: 0px;
}

.overlay {
    position: absolute;
    top: 0;
    padding: 2px;
    width: 100%;
    height: 100%;
    backdrop-filter: blur(8px);
    /* Apply blur effect */
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    opacity: 0;
    transition: opacity 0.9s ease-in-out;
}

.overlay.visible {
    opacity: 1;
}

.property-card-grid-scroller__item:hover .overlay {
    opacity: 1;
    /* Keep the overlay visible after hover */
}


.overlay-text {
    padding: 10px;
    font-size: 13px;
    color: #fff;
}

.area-details-list li {
    margin-bottom: 8px;
}

.property-card-scroller {
    position: relative;
}

.property-card-scroller i {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 24px;
    cursor: pointer;
    color: #333;
    /* Adjust the color as needed */
}



/* Only for desktop and should not visible on mbl */
.property-card-scroller i.fa-chevron-left {
    left: 0;
}

.property-card-scroller i.fa-chevron-right {
    right: 0;
}

.property-card-slider {
    display: flex;
    overflow-x: hidden;
    transition: transform 0.3s ease-in-out;
}

.property-card-slider_item {
    flex: 0 0 calc(25% - 2em);
    /* Adjust width and gap as needed */
    margin-right: 2em;
    position: relative;
    overflow: hidden;
    margin: 0px;
    padding: 0px;
    outline: none;
    border: none;
}

.property-card-slider_item:last-child {
    margin-right: 0;
}

.property-card-slider {
    transition: transform 0.3s ease-in-out;
}

.development-card {
    cursor: pointer;
}

@media only screen and (max-width: 600px) {

    .property-card-grid-scroller__item {
        width: 80%;

    }

    .inside-section-pad {
        padding-right: 15px !important;
    }

    .development-card:hover .overlay {
        opacity: 1;
        visibility: visible;
        background-color: rgba(0, 0, 0, 0.5);
        /* Semi-transparent background color */

    }

    .overlay {
        visibility: hidden;
        position: absolute;
        top: 0;
        padding: 2px;
        width: 100%;
        height: 100%;
        backdrop-filter: blur(8px);
        /* Apply blur effect */
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        opacity: 0;
    }

}

.safari-fix {
    transform: scaleX(-1);
}
</style>
