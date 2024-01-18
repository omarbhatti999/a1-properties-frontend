import Development from "../../apis/Developments";

export const getDevelopments = ({ commit }) => {
    commit("SET_LOADING", true)
    try {
        Development.all().then(response => {
            commit('SET_DEVELOPMENTS', response.data.data.developments);
            commit("SET_LOADING", false)
        })
    } catch (error) {

    } finally {
    }
}
export const getFeaturedDevelopments = ({ commit }) => {
    commit("SET_LOADING", true)
    try {
        Development.featured().then(response => {
            commit('SET_FEATURED_DEVELOPMENTS', response.data.data.developments);
            commit("SET_LOADING", false)
        })
    } catch (error) {

    } finally {
    }
}

export const getDevelopment = ({ commit }, developmentId) => {
    Development.show(developmentId).then(response => {
        commit('SET_DEVELOPMENT', response.data);
    })
}
export const getDevelopmentBySlug = ({ commit }, slug) => {
    Development.getBySlug(slug).then(response => {
        console.log(response, 'devResponse')
        commit("SET_DEVELOPMENT", response.data.data);
    });
};
