import Api from "./Api";

const END_POINT = 'blogs';
const FEATURED_BLOGS = 'featured-blogs';

export default {
    all() {
        return Api.get(END_POINT);
    },
    featured() {
        return Api.get(FEATURED_BLOGS);
    },
    show(id) {
        return Api.get(`${END_POINT}/${id}`);
    },
    getBySlug(slug) {
        return Api.get(`${END_POINT}/${slug}`);
    },
}
