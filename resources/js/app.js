
require('./bootstrap');
let axios = require('axios');
window.Vue = require('vue');

Vue.component('duas', require('./components/Duas.vue').default);
Vue.component('tags', require('./components/Tags.vue').default);


const app = new Vue({
    el: '#app',
});

