<template>
    <div id="onetap-wrapper" class="onetap-wrapper"></div>
    <Header></Header>
    <main>
        <div class="pb-9 vstack mt-5">
            <div class="page-entry" style="row-gap: 1rem;">
                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 text-center mt-5 pt-0">
                    <h1 class="">Projects</h1>
                    <h4 class="mt-0">With a focus on delivering excellence, we meticulously cover the spectrum of real
                        estate offerings in Dubai, presenting our clients with a seamless journey through the city's
                        flourishing ready properties and exciting off-plan developments</h4>
                </div>
                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 p-0 tab-content property-card-scroller-grid-item">
                    <div class="property-card-scroller pb-5">
                        <ul class="property-card-grid">
                            <li class="property-card-grid__item" v-for="item in developments">
                                <article class="development-card location-card" data-id="1480">
                                    <div class="development-card__media iw-card__media"
                                        @click="goToDevelopmentDetail(item.slug)">


                                        <div class="ratio ratio-4x5 iw-card__image post-card-image-border">
                                            <img :src="item.featuredImage"
                                                sizes="(min-width: 85em) 384px, (min-width: 78em) calc((100vw - 9rem) / 3), (min-width: 40em) calc((100vw - 6rem) / 2), calc(100vw - 4rem)"
                                                class="development-card__image" width="1920" height="1080"
                                                alt="1 JBR, picture 1">
                                        </div>
                                        <h3 class="development-card__heading">
                                            <a class="development-card__link">{{ item.developmentName }} </a>
                                        </h3>
                                    </div>
                                    <div class="development-card__body iw-card__body ">
                                        <div class="row">
                                            <div class="col-7">
                                                <span class="development-card__location">{{ item.areaName }}</span>
                                            </div>
                                            <div class="col-5 development-card__location-right">
                                                <span style="overflow-wrap: break-word;">{{ item.developerName }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </li>

                        </ul>
                        <div class="text-center mt-7">
                            <a class="btn btn-block btn-transparent btn-load-more">Load
                                more</a>
                            <div class="mt-3 count-text">
                                <span>20 of 99</span>
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
import { defineAsyncComponent } from 'vue';

const Header = defineAsyncComponent(() => import('../components/Header.vue'));
const Footer = defineAsyncComponent(() => import('../components/Footer.vue'));

import { mapState, mapActions } from 'vuex';
import { CodeLoader } from 'vue-content-loader';

export default {
    components: {
        Header, Footer, CodeLoader
    },
    data() {
        return {
            pagination: [],
            isHovered: false,

        }
    },
    created() {
        this.getDevelopments();

    },
    mounted() {
    },
    computed: {
        ...mapState("developments", ["developments", "loading"])
    },
    methods: {
        ...mapActions("developments", ["getDevelopments"]),
        goToDevelopmentDetail(slug) {
            this.$router.push(`/project/${slug}`);
        }
    },

}
</script>

<style scoped="scss">
.property-card__flag {
    margin-left: 0px;
}

.property-card-grid__item {
    cursor: pointer;
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

.development-card__location-right {
    text-align: right;
}

.btn-load-more {
    border: 2px solid #000;
}

.development-card__body {
    margin-top: -10px;
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

.property-card-grid-scroller__item {
    cursor: pointer;
}

@media only screen and (max-width: 600px) {
    .property-card-grid {
        grid-template-columns: repeat(2, 1fr)
    }

    .development-card__heading {
        font-size: 13px;
    }

    .development-card__location {
        font-size: 13px;
    }

    .development-card__location-right {
        font-size: 13px;

    }
}
</style>
