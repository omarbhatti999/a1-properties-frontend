<template>
    <div id="onetap-wrapper" class="onetap-wrapper"></div>
    <Header></Header>
    <main class="mb-0 pb-0">
        <div class="pb-9 vstack mt-5">
            <div class="page-entry" style="row-gap: 1rem;">
                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 text-center mt-5 pt-0">
                    <h1 class="">{{ blog.title }}</h1>
                    <h4 class="mt-0">{{ blog.subtitle }}</h4>
                </div>
                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 pt-5 tab-content property-card-scroller-grid-item">
                    <img :src="url + blog.blog_image" :alt="blog.slug" class="post-card__image" loading="lazy" width="500"
                        height="340">
                </div>

                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 pt-5 tab-content property-card-scroller-grid-item">
                    <div class="mt-0" v-html="blog.description_one">
                    </div>
                </div>
                <div class="g-col-3 g-start-1 g-col-lg-12 g-start-lg-2 pt-5 tab-content property-card-scroller-grid-item">
                    <div class="mt-0" v-html="blog.description_two">
                    </div>
                </div>

            </div>
        </div>
    </main>

    <Blogs></Blogs>
    <FooterRequestCallbackModal></FooterRequestCallbackModal>

    <Footer></Footer>
</template>
<script>
import { defineAsyncComponent, ref, onMounted } from 'vue';
import Header from '../../components/Header.vue';
import Footer from '../../components/Footer.vue';
import { mapState, mapActions } from 'vuex';
import FooterRequestCallbackModal from '../../components/FooterRequestCallbackModal.vue';
import dayjs from 'dayjs';
import { CodeLoader } from 'vue-content-loader';
const Blogs = defineAsyncComponent(() => import('./Blogs.vue'));

export default {
    name: 'BlogDetail',
    components: {
        Header, Footer, FooterRequestCallbackModal, CodeLoader, Blogs
    },
    data() {
        return {
            maxLines: 3,
            currentDate: dayjs(),
            url: 'https://old.a1properties.ae/projectFiles/blogImage/'
        };
    },
    created() {
        const slug = this.$route.params.slug;
        this.getBlogBySlug(slug);
        this.$watch(
            () => this.$route.params.slug,
            async (newSlug, oldSlug) => {
                // Fetch data when the slug parameter changes
                if (newSlug !== oldSlug) {
                    try {
                        await this.getBlogBySlug(slug);
                    } catch (error) {
                        console.error('Error in watch:', error);
                    }
                }
            }
        );
    },
    mounted() {
    },
    computed: {
        ...mapState("blog", ["blog", "loading"]),
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
        },
    },
    methods: {
        ...mapActions("blog", ["getBlogBySlug"]),
        formattedDate(created_at) {
            const date = dayjs(created_at);
            return `${date.format('DD')} • ${date.format('MMM').toUpperCase()} • ${date.format('YYYY')}`;
            // Customize the format based on your requirements
        },
    },
}
</script>

<style scoped="scss"></style>
