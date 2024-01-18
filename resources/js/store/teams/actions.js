import Team from "../../apis/Team";

export const getTeam = ({ commit },payload) => {
    commit('SET_LOADING', true);
    Team.all(payload).then(response => {
        commit('SET_TEAM', response.data.data.teams);
        commit('SET_LOADING', false)
    })
}

export const getAgent = ({ commit }, agentId) => {
    Team.show(areaId).then(response => {
        commit('SET_AGENT', response.data);
    })
}
export const getAgentBySlug = ({ commit }, slug) => {
    Team.getBySlug(slug).then(response => {
        commit("SET_TEAM", response.data.data);
    });
};
