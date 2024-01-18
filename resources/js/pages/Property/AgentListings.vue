<template>
    <div id="onetap-wrapper" class="onetap-wrapper"></div>
    <Header></Header>
    <main>

        <div class="vstack gap-9">
            <section class="page-entry">

                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 text-center mt-5 mb-0 pt-0">
                    <div class="row agent-profile-section pb-5 border-bottom">
                        <div class="hovering-bw col-sm-5 agent-profile-left">
                            <div class="property-card-body">
                                <img :src="team.profilePicture"
                                    :srcset="`${team.profilePicture} 320w,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ${team.profilePicture} 440w,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ${team.profilePicture} 560w`"
                                    sizes="(min-width: 85em) 384px, (min-width: 78em) calc((100vw - 9rem) / 3), (min-width: 40em) calc((100vw - 6rem) / 2), calc(100vw - 4rem)"
                                    alt="a1-properties-agent" class="post-card__image" loading="lazy" width="500"
                                    height="376">
                                <div class="post-card__body text-center">
                                    <p class="post-card__leader h2 mt-3">{{ team.name }}</p>

                                    <p class="post-card__leader">{{ team.designation }}</p>
                                    <div class="centered-container text-center" v-if="!team.designation != 'ASSOCIATES'">
                                        <ul class="separator-list separator-list--dots">
                                            <span v-for="(language, index) in team.agentLanguages" :key="index">
                                                <span>{{ language }}</span>
                                                <span v-if="index < team.agentLanguages.length - 1">•</span>
                                            </span>
                                        </ul>
                                    </div>
                                    <div class="row contact-btns mb-0 border-mbl-bottom">
                                        <div class="col-3 col-md-3 col-lg-3 mb-2" data-toggle="tooltip" data-placement="top"
                                            title="Call to Agent">
                                            <a target="_blank" href="tel:+971582489970">
                                                <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M21.97 18.33C21.97 18.69 21.89 19.06 21.72 19.42C21.55 19.78 21.33 20.12 21.04 20.44C20.55 20.98 20.01 21.37 19.4 21.62C18.8 21.87 18.15 22 17.45 22C16.43 22 15.34 21.76 14.19 21.27C13.04 20.78 11.89 20.12 10.75 19.29C9.6 18.45 8.51 17.52 7.47 16.49C6.44 15.45 5.51 14.36 4.68 13.22C3.86 12.08 3.2 10.94 2.72 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C11.27 13.75 11.79 14.24 12.32 14.69C12.84 15.13 13.27 15.43 13.61 15.61C13.66 15.63 13.72 15.66 13.79 15.69C13.87 15.72 13.95 15.73 14.04 15.73C14.21 15.73 14.34 15.67 14.45 15.56L15.21 14.81C15.46 14.56 15.7 14.37 15.93 14.25C16.16 14.11 16.39 14.04 16.64 14.04C16.83 14.04 17.03 14.08 17.25 14.17C17.47 14.26 17.7 14.39 17.95 14.56L21.26 16.91C21.52 17.09 21.7 17.3 21.81 17.55C21.91 17.8 21.97 18.05 21.97 18.33Z"
                                                        stroke="#292D32" stroke-width="1.8" stroke-miterlimit="10" />
                                                </svg>
                                            </a>

                                        </div>
                                        <div class="col-3 col-md-3 col-lg-3 mb-2" data-placement="top"
                                            title="Whatsapp to Agent">
                                            <a target="_blank"
                                                href="https://api.whatsapp.com/send/?phone=971582489970&text&type=phone_number&app_absent=0">
                                                <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M3.50002 12C3.50002 7.30558 7.3056 3.5 12 3.5C16.6944 3.5 20.5 7.30558 20.5 12C20.5 16.6944 16.6944 20.5 12 20.5C10.3278 20.5 8.77127 20.0182 7.45798 19.1861C7.21357 19.0313 6.91408 18.9899 6.63684 19.0726L3.75769 19.9319L4.84173 17.3953C4.96986 17.0955 4.94379 16.7521 4.77187 16.4751C3.9657 15.176 3.50002 13.6439 3.50002 12ZM12 1.5C6.20103 1.5 1.50002 6.20101 1.50002 12C1.50002 13.8381 1.97316 15.5683 2.80465 17.0727L1.08047 21.107C0.928048 21.4637 0.99561 21.8763 1.25382 22.1657C1.51203 22.4552 1.91432 22.5692 2.28599 22.4582L6.78541 21.1155C8.32245 21.9965 10.1037 22.5 12 22.5C17.799 22.5 22.5 17.799 22.5 12C22.5 6.20101 17.799 1.5 12 1.5ZM14.2925 14.1824L12.9783 15.1081C12.3628 14.7575 11.6823 14.2681 10.9997 13.5855C10.2901 12.8759 9.76402 12.1433 9.37612 11.4713L10.2113 10.7624C10.5697 10.4582 10.6678 9.94533 10.447 9.53028L9.38284 7.53028C9.23954 7.26097 8.98116 7.0718 8.68115 7.01654C8.38113 6.96129 8.07231 7.046 7.84247 7.24659L7.52696 7.52195C6.76823 8.18414 6.3195 9.2723 6.69141 10.3741C7.07698 11.5163 7.89983 13.314 9.58552 14.9997C11.3991 16.8133 13.2413 17.5275 14.3186 17.8049C15.1866 18.0283 16.008 17.7288 16.5868 17.2572L17.1783 16.7752C17.4313 16.5691 17.5678 16.2524 17.544 15.9269C17.5201 15.6014 17.3389 15.308 17.0585 15.1409L15.3802 14.1409C15.0412 13.939 14.6152 13.9552 14.2925 14.1824Z"
                                                        fill="#000000" />
                                                </svg>


                                            </a>
                                        </div>
                                        <div class="col-3 col-md-3 col-lg-3 mb-2" data-placement="top"
                                            title="Email to Agent">
                                            <a target="_blank" href="mailto:promo@a1properties.ae">
                                                <svg height="40px" width="40px" version="1.1" id="_x32_"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                                                    xml:space="preserve">

                                                    <g>
                                                        <path class="st0" d="M510.678,112.275c-2.308-11.626-7.463-22.265-14.662-31.054c-1.518-1.915-3.104-3.63-4.823-5.345
                                                   c-12.755-12.818-30.657-20.814-50.214-20.814H71.021c-19.557,0-37.395,7.996-50.21,20.814c-1.715,1.715-3.301,3.43-4.823,5.345
                                                   C8.785,90.009,3.63,100.649,1.386,112.275C0.464,116.762,0,121.399,0,126.087V385.92c0,9.968,2.114,19.55,5.884,28.203
                                                   c3.497,8.26,8.653,15.734,14.926,22.001c1.59,1.586,3.169,3.044,4.892,4.494c12.286,10.175,28.145,16.32,45.319,16.32h369.958
                                                   c17.18,0,33.108-6.145,45.323-16.384c1.718-1.386,3.305-2.844,4.891-4.43c6.27-6.267,11.425-13.741,14.994-22.001v-0.064
                                                   c3.769-8.653,5.812-18.171,5.812-28.138V126.087C512,121.399,511.543,116.762,510.678,112.275z M46.509,101.571
                                                   c6.345-6.338,14.866-10.175,24.512-10.175h369.958c9.646,0,18.242,3.837,24.512,10.175c1.122,1.129,2.179,2.387,3.112,3.637
                                                   L274.696,274.203c-5.348,4.687-11.954,7.002-18.696,7.002c-6.674,0-13.276-2.315-18.695-7.002L43.472,105.136
                                                   C44.33,103.886,45.387,102.7,46.509,101.571z M36.334,385.92V142.735L176.658,265.15L36.405,387.435
                                                   C36.334,386.971,36.334,386.449,36.334,385.92z M440.979,420.597H71.021c-6.281,0-12.158-1.651-17.174-4.552l147.978-128.959
                                                   l13.815,12.018c11.561,10.046,26.028,15.134,40.36,15.134c14.406,0,28.872-5.088,40.432-15.134l13.808-12.018l147.92,128.959
                                                   C453.137,418.946,447.26,420.597,440.979,420.597z M475.666,385.92c0,0.529,0,1.051-0.068,1.515L335.346,265.221L475.666,142.8
                                                   V385.92z" />
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="col-3 col-md-3 col-lg-3 mb-2" data-placement="top"
                                            title="Contant on Instagram to Agent">
                                            <a target="_blank" href="https://instagram.com/a1propertiesuae">
                                                <svg width="40px" height="40px" viewBox="0 0 48 48"
                                                    xmlns="http://www.w3.org/2000/svg">

                                                    <g id="Layer_2" data-name="Layer 2">
                                                        <g id="invisible_box" data-name="invisible box">
                                                            <rect width="48" height="48" fill="none" />
                                                            <rect width="48" height="48" fill="none" />
                                                        </g>
                                                        <g id="icons_Q2" data-name="icons Q2">
                                                            <path
                                                                d="M24,7.6h8.1a10.8,10.8,0,0,1,3.7.7,6.7,6.7,0,0,1,3.8,3.8,10.8,10.8,0,0,1,.7,3.7c.1,2.1.1,2.8.1,8.1s0,6-.1,8.1a10.8,10.8,0,0,1-.7,3.7,6.7,6.7,0,0,1-3.8,3.8,10.8,10.8,0,0,1-3.7.7H15.9a10.8,10.8,0,0,1-3.7-.7,6.7,6.7,0,0,1-3.8-3.8,10.8,10.8,0,0,1-.7-3.7c-.1-2.1-.1-2.8-.1-8.1s0-6,.1-8.1a10.8,10.8,0,0,1,.7-3.7,6.7,6.7,0,0,1,3.8-3.8,10.8,10.8,0,0,1,3.7-.7H24M24,4H15.8a17.9,17.9,0,0,0-4.9.9A10,10,0,0,0,7.4,7.4a8.5,8.5,0,0,0-2.3,3.5,14.5,14.5,0,0,0-1,4.9C4,17.9,4,18.6,4,24s0,6.1.1,8.2a14.5,14.5,0,0,0,1,4.9,8.5,8.5,0,0,0,2.3,3.5,8.5,8.5,0,0,0,3.5,2.3,14.5,14.5,0,0,0,4.9,1H32.2a14.5,14.5,0,0,0,4.9-1,8.5,8.5,0,0,0,3.5-2.3A10,10,0,0,0,43,37.1a17.9,17.9,0,0,0,.9-4.9c.1-2.1.1-2.8.1-8.2s0-6.1-.1-8.2a17.9,17.9,0,0,0-.9-4.9,10,10,0,0,0-2.4-3.5A10,10,0,0,0,37.1,5a17.9,17.9,0,0,0-4.9-.9H24" />
                                                            <path
                                                                d="M24,13.7A10.3,10.3,0,1,0,34.3,24,10.3,10.3,0,0,0,24,13.7m0,17A6.7,6.7,0,1,1,30.7,24,6.7,6.7,0,0,1,24,30.7" />
                                                            <path
                                                                d="M37.1,13.3a2.4,2.4,0,1,1-2.4-2.4,2.4,2.4,0,0,1,2.4,2.4" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7 agent-description ">
                            <h3 class="align-left">About</h3>
                            <p class="" v-html="team.agentInfo"></p>
                        </div>
                    </div>
                    <div v-if="team.listings.properties.length > 0">

                        <h1 class="mt-7">{{ team.name }}'s Listings</h1>

                        <div class="vstack">
                            <FilteredProperties :listings="team.listings"></FilteredProperties>
                        </div>
                    </div>

                </div>
            </section>

        </div>
    </main>
    <Footer></Footer>
</template>

<script>
import Header from '../../components/Header.vue';
import FilteredProperties from '../../components/FilteredProperties.vue';
import Properties from './Properties.vue';
import Footer from '../../components/Footer.vue';
import { mapState, mapActions } from 'vuex';

export default {
    name: "AgentListings",
    components: {
        Header,
        FilteredProperties,
        Properties,
        Footer,

    },
    data() {
        return {
        }
    },
    props: ['param'], // declare 'param' as a prop

    created() {
        this.getAgentBySlug(this.param);
    },
    mounted() {

    },
    computed: {
        ...mapState('team', ['team', 'loading']),

    },
    methods: {
        toggleFilters() {
            this.showFilters = !this.showFilters;
        },
        closeModal() {
            this.showFilters = false;
        },
        ...mapActions("team", ["getAgentBySlug"]),

    },
}
</script>

<style scoped="scss">
.listing-cta-card {
    max-width: 350px;
    /* Set the maximum width of the card */
    margin: 0 auto;
    /* Center the card horizontally */
}

.post-card__image {
    max-width: 300px;
}

.post-card__leader {
    font-weight: 600;
}

.agent-profile-left {
    border-right: 1px solid transparent ;
    border-image: linear-gradient(to top, #c67057, transparent) 0.9 ;
    transform: translate(0px, 0px);
    display: inline-block;
}

.sort-by-filter {
    cursor: pointer;
    border: 1px solid #000;
}

.btn-filters {
    padding: 10px;

}

select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    text-indent: 1px;
    text-overflow: '';
    border-radius: 4px;
    font-size: 14px;
    padding-left: 5px;
    outline: none;
    border: none;
    margin: 0px;
    background-color: transparent;
    padding: 2px;
}

option {
    padding: 2px;
}

select:focus {
    border: none;
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
    /* Ensure items stay on one line */
}

.separator-list span {
    display: flex;
    align-items: center;
    margin-left: 2px;
    margin-right: 2px;
    /* Adjust as needed for spacing between language and dot */
}

.agent-description {
    bottom: 0px;
}

.agent-profile-section {
    grid-template-rows: 1fr auto;
    /* The first row takes the remaining space, and the second row contains the bottom div */
}

.agent-description {
    margin-top: auto;
    /* Push the div to the bottom */

}

.agent-description p,
h3 {
    text-align: left;
    margin-left: 40px;
    ;
}

.contact-btns {
    margin-left: 70px;
    margin-right: 70px;
}

.listing-cta-card__btn,
.contact-btns svg,
.property-card-scroller-grid-item {
    cursor: pointer;
}

@media only screen and (max-width: 600px) {
    .agent-description {
        margin-top: 20px;
    }

    .border-mbl-bottom {
        border-bottom: 1px solid #c67057;
        padding-bottom: 20px;
    }

    .agent-description p {
        margin-left: 0px;
    }

    .align-left {
        margin-left: 0px;
    }

    .contact-btns svg {
        width: 30px;
        height: 30px;
    }
}
</style>
