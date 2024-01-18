import Api from "./Api";

const END_POINT = 'developments';
const END_POINT_FEATURED = 'featured-developments';

export default {
    all() {
        return Api.get(END_POINT);
    },
    featured() {
        return Api.get(END_POINT_FEATURED);
    },
    show(id) {
        return Api.get(`${END_POINT}/${id}`);
    },
    getBySlug(slug) {
        return Api.get(`${END_POINT}/${slug}`);
    },
}
