import Vuex from "vuex";

import state from "./state";
import * as getters from './getters';
import * as mutations from "./mutations";
import * as actions from "./actions";

import developer from "./developers";
import area from "./areas";
import developments from "./developments";
import properties from "./properties";
import team from "./teams";
import home from "./home";
import blog from "./blogs";

const store =  new Vuex.Store({
    state,
    getters,
    mutations,
    actions,

    modules: {
        team,
        developer,
        area,
        developments,
        properties,
        home,
        blog,
    }
});
export default store;
