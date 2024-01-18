<template>
    <div id="onetap-wrapper" class="onetap-wrapper"></div>
    <Header></Header>
    <main>
        <div class="pb-9 vstack mt-5">
            <div class="page-entry" style="row-gap: 1rem;">
                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 text-center mt-5 pt-0">
                    <h1 class="">Communities</h1>
                    <h4 class="mt-0">We pride ourselves on providing our clients with access to the finest communities
                        across the United Arab Emirates. Our extensive network of partnerships with developers allows us to
                        offer our clients an unparalleled selection of properties to choose from, in the most sought-after
                        communities in the region.</h4>
                </div>
                <div
                    class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 p-0 tab-content property-card-scroller-grid-item mt-0">

                    <div class="property-card-scroller pb-5">


                        <!-- Previous Icon -->
                        <div class="property-card-grid-scroller" v-if="loading">
                            <code-loader :speed="2" v-for="index in 3" :key="index"></code-loader>
                        </div>

                        <ul ref="propertyCardSlider" class="property-card-grid"
                            :class="{ 'property-card-slider': !isMobile }" v-else>
                            <li v-for="item in areas" :key="item.id" class="property-card-grid__item"
                                :class="{ 'property-card-slider_item': !isMobile }" @mouseover="handleHover(true, index)"
                                @mouseleave="handleHover(false)" @click="gotToAreaDetail(item.slug)">
                                <article class="development-card location-card" data-id="1480">
                                    <div class="development-card__media iw-card__media">
                                        <div class="ratio ratio-4x5 iw-card__image post-card-image-border"
                                            :style="{ transform: `translateX(${(index - activeIndex) * 100}%) scale(${index === activeIndex ? 1.2 : 1}) rotateY(${(index - activeIndex) * 5}deg)` }">
                                            <img :src="item.featuredImage"
                                                :srcset="`${item.featuredImage} 320w,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 ${item.featuredImage} 440w,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ${item.featuredImage} 560w`"
                                                sizes="(min-width: 85em) 384px, (min-width: 78em) calc((100vw - 9rem) / 3), (min-width: 40em) calc((100vw - 6rem) / 2), calc(100vw - 4rem)"
                                                class="development-card__image" width="1920" height="1080"
                                                :alt="item.slug" />
                                            <div v-if="isHovered && index === activeIndex" class="overlay">
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
                        <div class="text-center mt-7">
                            <a class="btn btn-block btn-transparent btn-load-more">Load
                                more</a>
                            <div class="mt-3 count-text">
                                <span>80 of 144</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
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
        Nav, Header, Footer, SearchFilterDropdown,
        CodeLoader
    },
    data() {
        return {
            isHovered: false,
            activeIndex: 0,
            scrollPosition: 0,
            isMobile: false,
            backendUrl:'https://a1properties.ae/backend/',
            // backendUrl: 'http://192.168.2.46:8000/',

        }
    },
    created() {
        this.getAreas();
        this.checkScreenWidth()

    },
    mounted() {
        window.addEventListener("resize", this.checkScreenWidth);

    },
    destroyed() {
        window.removeEventListener("resize", this.checkScreenWidth); // Remove the event listener on component destruction
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
    methods: {
        ...mapActions("area", ["getAreas"]),
        handleHover(isHovered, index) {
            this.isHovered = isHovered;
            if (isHovered) {
                this.activeIndex = index;
            }
        },
        checkScreenWidth() {
            this.isMobile = window.innerWidth <= 600;
        },
        gotToAreaDetail(slug) {
            this.$router.push(`/community/${slug}`);
        }
    },

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
    color: #fff !important;

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

/* Only for desktop and should not visible on mbl */
.property-card-scroller i.fa-chevron-left {
    left: 0;
}

.property-card-scroller i.fa-chevron-right {
    right: 0;
}

.property-card-slider {
    display: grid;
    gap: var(--grid-gap);
    grid-template-columns: repeat(4, 1fr);
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
    .property-card-grid {
        grid-template-columns: repeat(2, 1fr)
    }
    .development-card__heading{
        font-size: 13px;;
    }

}</style>
