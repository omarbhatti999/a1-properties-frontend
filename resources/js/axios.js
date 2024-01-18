// axios.js
import axios from 'axios';

const apiBaseUrl = `http://127.0.0.1:8000/api`; // Assuming you set this in your Vite environment

const instance = axios.create({
    baseURL: apiBaseUrl,
});

export default instance;
