import Developer from "../../apis/Developers";

export const getDevelopers = ({ commit }) => {
    Developer.all().then(response => {
        commit('SET_DEVELOPERS', response.data.data.developers);
        commit('SET_LOADING',false)
    })
}

export const getDeveloper = ({ commit }, developerId) => {
    Developer.show(developerId).then(response => {
        commit('SET_DEVELOPER', response.data);
    })
}
