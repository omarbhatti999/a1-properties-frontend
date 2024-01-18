<template>
    <div id="onetap-wrapper" class="onetap-wrapper"></div>
    <Header></Header>

    <main>
        <section class="page-entry py-6">
            <div class="g-col-1 g-start-2 g-col-lg-8 g-start-lg-4 text-center">
                <h1 class="mb-2">The Team</h1>
                <p>Meet our experts</p>
            </div>
        </section>

        <div class="pb-9 vstack">
            <div class="page-entry" style="row-gap: 1rem;">
                <nav style="position:relative;margin:auto;"
                    class="g-col-12 g-start-1 g-col-lg-12 g-start-lg-2 featured-tab-groups-head border-color-grey-7 pt-2">
                    <ul class="button-list nav nav-tabs nav-tabs--featured-tab-groups" role="tablist">
                        <li class="button-list-item nav-item" role="presentation">
                            <button class="custom-button nav-link active" id="villas-new-tab" data-tab-has-flickity
                                data-bs-toggle="tab" data-bs-target="#villas-new-tab-pane" type="button" role="tab"
                                aria-controls="villas-new-tab-pane" aria-selected="true"
                                @click="filterTeam('Management')">Management
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="custom-button nav-link" id="villas-reductions-tab" data-tab-has-flickity
                                data-bs-toggle="tab" data-bs-target="#villas-new-tab-pane" type="button" role="tab"
                                aria-controls="villas-reductions-tab-pane" aria-selected="true"
                                @click="filterTeam('Associates')">Associates
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="custom-button nav-link" id="villas-reductions-tab" data-tab-has-flickity
                                data-bs-toggle="tab" data-bs-target="#villas-new-tab-pane" type="button" role="tab"
                                aria-controls="villas-reductions-tab-pane" aria-selected="true"
                                @click="filterTeam('Marketing')">Marketing
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="custom-button nav-link" id="villas-reductions-tab" data-tab-has-flickity
                                data-bs-toggle="tab" data-bs-target="#villas-new-tab-pane" type="button" role="tab"
                                aria-controls="villas-reductions-tab-pane" aria-selected="true"
                                @click="filterTeam('Admin')">Admin
                            </button>
                        </li>
                    </ul>
                </nav>



                <div
                    class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 p-0 tab-content property-card-scroller-grid-item mt-0">

                    <div class="property-card-scroller pb-5">


                        <!-- Previous Icon -->
                        <div class="property-card-grid-scroller" v-if="loading">
                            <code-loader :speed="2" v-for="index in 3" :key="index"></code-loader>
                        </div>

                        <ul ref="propertyCardSlider" class="property-card-grid" v-else>
                            <li v-for="item in team" :key="item.id"
                                class="property-card-grid__item card listing-cta-card hovering-bw">
                                <article class="property-card-body agent-card" v-if="item.teamGroup === activeTab" @click="toListings(item.slug)">
                                    <div class="ratio-5x7">
                                        <img :src="item.profilePicture" :srcset="`${item.profilePicture} 320w`"
                                            alt="Five stunning villas in Jumeirah" class="post-card__image" width="500"
                                            height="376">
                                    </div>
                                    <div class="post-card__body">
                                        <h4 class="post-card__heading h2">
                                            {{ item.name }}

                                        </h4>
                                        <p class="post-card__leader">{{ item.designation }}</p>
                                        <div class="centered-container" v-if="item.teamGroup == 'Associates'">
                                            <ul class="separator-list separator-list--dots text-center"
                                                style="width:100%';">
                                                <span v-for="(language, index) in item.agentLanguages" :key="index">
                                                    <span>{{ language }}</span>
                                                    <span v-if="index < item.agentLanguages.length - 1">•</span>
                                                </span>
                                            </ul>
                                        </div>

                                        <button @click="toListings(item.slug)" v-if="item.teamGroup == 'Associates'"
                                            class="listing-cta-card__btn btn btn-lg btn-color-black mt-0">

                                            View Profile

                                        </button>

                                    </div>
                                </article>
                            </li>

                        </ul>


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
            selectedRole: 'Management', // Default role
            loadingItem: false,
            activeTab: 'Management', // Default active tab


        }
    },
    created() {
        this.getTeam(this.activeTab);

    },
    mounted() {
  ;
    },
    computed: {
        ...mapState('team', ['team', 'loading']),
    },
    methods: {
        ...mapActions('team', ['getTeam', 'getAgentBySlug']),

        toListings(slug) {
            this.$router.push({
                name: 'AgentListings',
                params: { param: slug },

            });
        },
        filterTeam(type){
            this.activeTab = type
            this.getTeam(type);
        },

    },

}
</script>

<style scoped="scss">
.button-list {
    list-style-type: none;
    padding: 10px;
    display: flex;
    background-color: #f2f2f2;
    border-radius: 0.5rem;
    border: 2px solid #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    list-style: none;
    padding: 0;
}

.post-card__leader {
    font-weight: 500;
}

.button-list-item {
    flex: 1;
}

.custom-button {
    width: 200px !important;
    color: #000;
    font-weight: 600;
    padding: 5px 5px;
    text-align: center;
    border: none;
    background-color: #f2f2f2;
    border-radius: 0.5rem;
    transition: background-color 0.3s;
    position: relative;
    cursor: grab;
}


.custom-button:hover {
    color: #000;
    background-color: #b1aeae;
}

.custom-button.active {
    color: #fff;
    background-color: #000;
}

.post-card__media {
    background-color: transparent !important;
}

.post-card__body {
    align-content: center;
    text-align: center;
}

.centered-container {
    display: flex;
    justify-content: center;
}

.separator-list {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
    flex-wrap: nowrap;
    justify-content: center;

    /* Ensure items stay on one line */
}

.separator-list span {
    display: flex;
    align-items: center;
    margin: 2px
        /* Adjust as needed for spacing between language and dot */
}

.property-card {
    padding: 20px;
}

.post-card__image {
    border-radius: 50%;
    height: 70%;
    margin-bottom: 20px;
}

.agent-card {
    padding: 20px;
}

.listing-cta-card__btn {
    cursor: pointer;
    box-shadow: 2px 5px 5px #626161;
}

.contact-btns svg {
    filter: drop-shadow(5px 3px 2px rgba(0, 0, 0, .3));

}

.post-card__image {
    filter: drop-shadow(5px 13px 12px rgba(0, 0, 0, .3));

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

.listing-cta-card__btn,
.contact-btns svg,
.property-card-scroller-grid-item {
    cursor: pointer;
}

.hovering-bw {
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    transition: filter 0.3s ease;
    /* Add a smooth transition for a more visually pleasing effect */
}

.hovering-bw:hover {
    -webkit-filter: grayscale(0%) !important;
    filter: grayscale(0%) !important;
}

@media only screen and (max-width: 600px) {
    .contact-btns svg {
        width: 25px !important;
        height: 25px !important;
    }

    /* Add this CSS to your stylesheet */
    .nav-tabs--featured-tab-groups .button-list {
        display: flex;
        overflow-x: auto;
        /* Enable horizontal scrolling for small screens */
        -webkit-overflow-scrolling: touch;
        /* Enable smooth scrolling on iOS devices */
    }

    .nav-tabs--featured-tab-groups .nav-item {
        flex: 0 0 auto;
        /* Make the items non-flexible and maintain their original size */
    }

    .nav-tabs--featured-tab-groups .nav-link {
        white-space: nowrap;
        /* Prevent button text from wrapping to the next line */
        overflow: hidden;
        /* Hide any overflow text */
        text-overflow: ellipsis;
        /* Display an ellipsis (...) when text overflows */
        min-width: 0;
        /* Allow the items to shrink beyond their default width */
    }

    .custom-button {
        width: 75px !important;
        text-align: center;
        margin: 0px;
        font-size: 9px;


    }

    .custom-button:hover {
        color: #000;
        background-color: #b1aeae;
    }

    .custom-button.active {
        color: #fff;
        background-color: #000;
    }

    .property-card-grid {
        grid-template-columns: repeat(2, 1fr)
    }

    .development-card__heading {
        font-size: 13px;
    }

    .agent-card {
        padding: 5px;
    }

    .listing-cta-card__btn {
        width: 100%;
        font-size: 12px;
        padding: 5px
    }

    .separator-list {
        font-size: 10px;
    }

    .separator-list--dots {
        display: flex;
        flex-wrap: wrap;
        max-width: 200px;
        /* Adjust the maximum width as needed */
    }

}
</style>
