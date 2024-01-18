<template>
    <div
        class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 p-0 tab-content property-card-scroller-grid-item mt-0 inside-section-pad">
        <div class="property-card-scroller">
            <ul class="property-card-grid-scroller">
                <li class="property-card-grid-scroller__item" v-for="(item, index) in developments">
                    <article class="development-card location-card" data-id="1480">
                        <div style="cursor:pointer" class="development-card__media iw-card__media"
                            @click="goToDevelopmentDetail(item.slug)">
                            <div class="ratio ratio-4x5 iw-card__image post-card-image-border">
                                <img :src="item.featuredImage"
                                    sizes="(min-width: 85em) 384px, (min-width: 78em) calc((100vw - 9rem) / 3), (min-width: 40em) calc((100vw - 6rem) / 2), calc(100vw - 4rem)"
                                    class="development-card__image" width="1920" height="1080" alt="1 JBR, picture 1">
                            </div>
                            <h3 class="development-card__heading">
                                <a class="development-card__link">{{ item.developmentName }} </a>
                            </h3>
                        </div>
                        <div class="development-card__body iw-card__body">
                            <div class="row">
                                <div class="col-6">
                                    <span class="development-card__location">{{ item.areaName }}</span>
                                </div>
                                <div class="col-6 development-card__location-right">
                                    <span class="development-card__location-right">{{ item.developerName }}</span>
                                </div>
                            </div>

                        </div>
                    </article>
                </li>

            </ul>

        </div>
    </div>
    <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 align-center mb-3 mt-0">
        <p class="view-all"><router-link to="/projects">View All</router-link></p>
    </div>
</template>
<script>
import { mapState, mapActions } from 'vuex';
import { CodeLoader } from 'vue-content-loader';

export default {
    name: "FeaturedDevelopments",
    components: {
        CodeLoader
    },
    props: {
        propType: String, // Declare a prop named 'message'
    },
    data() {
        return {

        }
    },
    created() {
        this.getFeaturedDevelopments();
    },
    mounted() {
    },
    computed: {
        ...mapState('developments', ['developments', 'loading']),
    },
    methods: {
        ...mapActions('developments', ['getFeaturedDevelopments']),
        async goToDevelopmentDetail(slug) {
            await this.$router.push(`/project/${slug}`);
            console.log('Child component has finished fetching data');
        }
    },

}
</script>

<style scoped="scss">
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

.development-card__location-right {
    text-align: right;
}

@media only screen and (max-width: 600px) {

    .inside-section-pad {
        padding-right: 15px !important;
    }
}
@media only screen and (min-width: 1200px) {

}

</style>
