import axios from "axios";

const Api = axios.create({
    baseURL: 'http://192.168.2.46:9000/api'
    // baseURL: 'https://a1properties.ae/api/'

});

export default Api;
