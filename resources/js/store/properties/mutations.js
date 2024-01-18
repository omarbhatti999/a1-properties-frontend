export const SET_PROPERTIES = (state, properties) => {
    state.properties = properties;
}
export const APPEND_PROPERTIES = (state, properties) => {

    state.properties = [...state.properties, ...properties];
};
export const SET_PROPERTY = (state, property) => {
    state.property = property;
}
export const SET_LOADING = (state, loading) => {
    state.loading = loading;
}
export const SET_FILTER = (state,filter)=>{
    state.filter = filter;
}
export const PROPERTIES_DATA = (state, propertiesData) => {
    state.propertiesData = propertiesData;
}
