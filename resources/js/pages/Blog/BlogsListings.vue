<template>
    <div id="onetap-wrapper" class="onetap-wrapper"></div>
    <Header></Header>
    <main>
        <div class="pb-9 vstack mt-5">
            <div class="page-entry" style="row-gap: 1rem;">
                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 text-center mt-5 pt-0">
                    <h1 class="">The Blogs</h1>
                    <h4 class="mt-0">Read our collection of blogs about Dubai Properties</h4>
                </div>
                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 p-0 tab-content property-card-scroller-grid-item">
                    <div class="property-card-scroller">
                        <div class="loader-grid" v-if="loading">
                            <code-loader :speed="2" v-for="index in 9" :key="index"></code-loader>
                        </div>
                        <ul class="property-card-grid">

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

                        <div class="text-center mt-7">
                            <a class="btn btn-block btn-transparent btn-load-more">Load
                                more</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <FooterRequestCallbackModal></FooterRequestCallbackModal>

    <Footer></Footer>
</template>
<script>
import Header from '../../components/Header.vue';
import Footer from '../../components/Footer.vue';
import { mapState, mapActions } from 'vuex';
import FooterRequestCallbackModal from '../../components/FooterRequestCallbackModal.vue';
import dayjs from 'dayjs';
import { CodeLoader } from 'vue-content-loader';
// EventBus.js

export default {
    name: 'BlogsListings',
    components: {
        Header, Footer, FooterRequestCallbackModal,CodeLoader
    },
    data() {
        return {
            currentDate: dayjs(),
            url:'https://old.a1properties.ae/projectFiles/blogImage/'
        };
    },
    created() {
        this.getBlogs();

    },
    mounted() {
    },
    computed: {
        ...mapState("blog", ["blogs", "loading"]),

    },
    methods: {
        ...mapActions("blog", ["getBlogs"]),
        formattedDate(created_at) {
            const date = dayjs(created_at);
            return `${date.format('DD')} • ${date.format('MMM').toUpperCase()} • ${date.format('YYYY')}`;
            // Customize the format based on your requirements
        },
        blogDetail(slug){
            this.$router.push(`/blog-detail/${slug}`)
        }
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

.post-card__link {
    color: #fff;
    font-weight: 600;
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
.fixed-rows{
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: normal;
}
@media only screen and (max-width: 600px) {
    .property-card-grid {
        grid-template-columns: repeat(1, 1fr);
        justify-content: center;
        align-items: center;
        list-style: none;
        padding: 0;
        /* Remove default padding on ul element */
    }

    .property-card-grid-scroller__item {
        width: 80%;
        position: relative;
        margin: auto;
    }
}
</style>
