import { param } from "jquery";
import Api from "./Api";

const END_POINT = 'listings';

export default {
    all(page = 1, params = null,sortby=null) {
        let queryParams = '';
        let sortByParams = '';
        if (params) {
            const encodedParams = encodeURIComponent(new URLSearchParams(params).toString());
            queryParams = `&params=${encodedParams}`;
        }
        if(sortby){
            sortByParams = `&sortByParams=${sortby}`;
        }

        return Api.get(`${END_POINT}?page=${page}${queryParams}${sortByParams}`);
    },

    getBySlug(slug) {
        return Api.get(`${END_POINT}/${slug}`);
    },
    fetchPropertiesByParams(params) {
        const queryString = Object.keys(params)
            .map(key => `${encodeURIComponent(key)}=${encodeURIComponent(params[key])}`)
            .join('&');
        return Api.get(`${END_POINT}/all/${queryString}`);
    },
    commercial() {
        return Api.get(`${END_POINT}/commercial`);

    }
}
