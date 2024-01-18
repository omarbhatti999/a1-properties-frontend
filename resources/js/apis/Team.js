import { param } from "jquery";
import Api from "./Api";

const END_POINT = 'team';

export default {
    all(params) {
        const queryString = `${encodeURIComponent(params)}`;

        return Api.get(`${END_POINT}/all/${queryString}`);
    },

    getBySlug(slug) {
        return Api.get(`${END_POINT}/${slug}`);
    },

}
