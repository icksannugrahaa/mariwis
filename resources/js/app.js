require('./bootstrap');

Vue.config.devtools = true;

import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import vuetify from './plugins/vuetify';
import {
    routes
} from './routes';
import TemplateUtama from './templates/main-template.vue';
import StoreData from './store';

Vue.use(VueRouter);
Vue.use(Vuex);

const store = new Vuex.Store(StoreData);

const router = new VueRouter({
    routes,
    mode: 'history',
});

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('template-sidebar', require('./templates/main-template.vue').default);

const app = new Vue({
    el: '#app',
    vuetify,
    router,
    store,
    components: {
        TemplateUtama
    }
});
