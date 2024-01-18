import Api from "./Api";

const END_POINT = 'areas';

export default {
    all() {
        return Api.get(END_POINT);
    },
    featured(){
        return Api.get(`${END_POINT}/featured`);
    },
    show(id) {
        return Api.get(`${END_POINT}/${id}`);
    },
    getBySlug(slug) {
        return Api.get(`${END_POINT}/${slug}`);
    },
}
