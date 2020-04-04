require('./bootstrap');

window.Vue = require('vue');

Vue.component('Root', require('./components/Root.vue').default);

import Vuex from 'vuex';

const app = new Vue({
    el: '#app',
});
