import Home from "../../apis/Home";

export const getAll = ({ commit }) => {
    Home.all().then(response => {
        commit('SET_HOME', response.data.data);
        commit('SET_LOADING', false)
    })
}

