import './bootstrap';

import '../sass/app.scss'
import store from "./store";


import { createApp } from 'vue';
import router from './router.js'
import Vuex from 'vuex'
import App from './layouts/App.vue'
import VueTelInput from 'vue-tel-input';
import 'vue-tel-input/dist/vue-tel-input.css';
const globalOptions = {
    mode: 'auto',
  };
createApp(App)
    .use(router)
    .use(store)
    .use(Vuex)
    .use(VueTelInput,globalOptions)
    .mount("#app")
