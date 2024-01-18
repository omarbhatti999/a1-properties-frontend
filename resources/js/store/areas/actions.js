import Area from "../../apis/Areas";

export const getAreas = ({ commit }) => {
    Area.all().then(response => {
        commit('SET_AREAS', response.data.data.areas);
        commit('SET_LOADING', false)
    })
}
export const getFeaturedAreas = ({ commit }) => {
    Area.featured().then(response => {
        commit('SET_FEATURED_AREAS', response.data.data.areas);
        commit('SET_LOADING', false)
    })
}
export const getArea = ({ commit }, areaId) => {
    Area.show(areaId).then(response => {
        commit('SET_AREA', response.data);
    })
}

export const getAreaBySlug = ({ commit }, slug) => {
    Area.getBySlug(slug).then(response => {
        commit("SET_AREA", response.data.data);
    });
};
