// properties.js Vuex module

import Property from "../../apis/Properties";
import { SET_LOADING } from "./mutations";

export const getProperties = ({ commit, state }, { page, params,sortby }) => {
    commit('SET_LOADING', true);
    Property.all(page,params,sortby).then(response => {
        const properties = response.data.data.properties;
        const propertiesData = response.data.data;
        commit('PROPERTIES_DATA', propertiesData);
        if (page > 1) {
            commit('APPEND_PROPERTIES', properties);
        } else {
            // If it's the first page, replace the existing list
            commit('SET_PROPERTIES', properties);
        }
        commit('SET_LOADING', false);
    });
};

export const getProperty = ({ commit }, propertyId) => {
    commit('SET_LOADING', true);

    Property.show(propertyId).then(response => {
        commit('SET_PROPERTY', response.data);
        commit('SET_LOADING', false);
    });
};

export const getPropertyBySlug = async ({ commit }, slug) => {
    commit('SET_LOADING', true);

    try {
        // Return the promise
        const response = await Property.getBySlug(slug);

        const filter = response.data.data.listings

        // Commit mutations in the correct order
        commit('SET_PROPERTY', response.data.data);
        commit('SET_LOADING', false);
        commit('SET_FILTER', filter);

        // Return any data that might be useful in the component
        return response.data;
    } catch (error) {
        console.error('Error fetching data:', error);
        throw error; // Rethrow the error so that it can be caught in the component
    }
};

export const getPropertiesByParams = async ({ commit, state }, params) => {
    try {
        commit('SET_LOADING', true);

        // Assuming the API supports pagination, include the page parameter
        const response = await Property.fetchPropertiesByParams({ ...params, page: state.page });

        const properties = response.data.data.properties;
        if (state.page > 1) {
            // If it's not the first page, append properties to the existing list
            commit('APPEND_PROPERTIES', properties);
        } else {
            // If it's the first page, replace the existing list
            commit('SET_PROPERTIES', properties);
        }

        commit('SET_LOADING', false);
    } catch (error) {
        console.error('Error fetching properties:', error);

        // Optionally, you can commit an error mutation or handle the error in a specific way
        commit('SET_LOADING', false);
        throw error; // Re-throw the error to handle it in the component
    }
};

