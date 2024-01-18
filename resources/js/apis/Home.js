import Api from "./Api";

const END_POINT = 'home';

export default {
    all() {
        return Api.get(END_POINT);
    },
}
