<template>
    <div class="pb-5 vstack">
        <div class="page-entry " style="row-gap: 1rem">
            <!-- <div class="g-col-3 g-start-1 g-col-lg-4 mt-2 g-start-lg-6 pt-5 border-top" :style="borderStyles">

            </div> -->
            <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 featured-tab-groups-head">
                <h3 class="heading-sections">THE BLOG</h3>
            </div>
            <div
                class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 p-0 tab-content property-card-scroller-grid-item inside-section-pad">
                <div class="property-card-scroller">
                    <ul class="property-card-grid-scroller ">

                        <li class="property-card-grid-scroller__item" v-for="blog in blogs">
                            <article class="post-card" @click="blogDetail(blog.slug)">
                                <div class="post-card__media ratio ratio-5x7">
                                    <div class="post-card-image-border">
                                        <img :src="url+blog.blog_image" alt="Five stunning villas in Jumeirah" class="post-card__image"
                                            loading="lazy" width="500" height="376">
                                    </div>
                                    <h3 class="development-card__heading">
                                        <a href="#" class="post-card__link">{{ blog.title }}</a>
                                    </h3>
                                </div>
                                <div class="post-card__body mt-0">
                                    <p class="post-card__leader fixed-rows">{{ blog.subtitle }}</p>
                                    <footer class="post-card__footer">
                                        <span>{{ this.formattedDate(blog.created_at) }}</span>
                                    </footer>
                                </div>
                            </article>
                        </li>


                    </ul>
                </div>
            </div>
            <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 align-center mb-3 mt-2">
                <p><router-link to="/blogs">View All</router-link></p>
            </div>

        </div>

    </div>
</template>
<script>
import { mapState, mapActions } from 'vuex';
import dayjs from 'dayjs';
// import eventBus from '../../EventBus.js';

export default {
    name: 'Blogs',
    components: {
    },
    data() {
        return {
            scrollPosition: 300,
            initialOffset: 100,
            url:'https://old.a1properties.ae/projectFiles/blogImage/'

        }
    },
    created(){
        this.getFeaturedBlogs();
    },
    methods: {
        ...mapActions("blog", ["getFeaturedBlogs"]),
        blogsListings() {
            this.$router.push('/blogs');
        },
        handleScroll() {
            this.scrollPosition = window.scrollY;
        },
        formattedDate(created_at) {
            const date = dayjs(created_at);
            return `${date.format('DD')} • ${date.format('MMM').toUpperCase()} • ${date.format('YYYY')}`;
            // Customize the format based on your requirements
        },
        blogDetail(slug){
            this.$router.push(`/blog-detail/${slug}`)

        }

    },
    computed: {
        ...mapState("blog", ["blogs", "loading"]),

        borderStyles() {
            // Calculate the border width based on the scroll position
            const borderWidth = Math.max(0, this.scrollPosition - this.initialOffset);

            // Return an object with the dynamic styles
            return {
                width: `calc(100% + ${2 * borderWidth}px)`,
                marginLeft: `-${borderWidth}px`,
                marginRight: `-${borderWidth}px`,
            };
        },
    },
    mounted() {
        this.initialOffset = (window.innerWidth - 4 * /*number of cols*/ 20) / 2;
        window.addEventListener('scroll', this.handleScroll);

    },
    beforeUnmount() {
        window.removeEventListener('scroll', this.handleScroll);
    },
}
</script>

<style scoped="scss">
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
    border-image-slice: 1;
    border-image-width: 0.3;
    border-image-outset: 0;
    border-image-repeat: stretch;
}
.fixed-rows{
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: normal;
}
.post-card__link {
    color: #fff;
    font-weight: 600;
}

.border-container {
    transition: all 0.3s ease;
    /* Add a transition for a smooth effect */
    border-top: 2px solid #c67057;
    /* Customize the border styles as needed */
    padding: 10px;
    /* Adjust padding as needed */
}

@media only screen and (max-width: 600px) {
    .heading-sections {
        text-align: center;
    }

    .inside-section-pad {
        padding-right: 30px !important;
        padding-left: 15px !important;
    }
}</style>
