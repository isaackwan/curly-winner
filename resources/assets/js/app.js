require('inobounce');
require('framework7/dist/js/framework7');
window.$$ = window.Dom7;
require('./framework7');

// import Framework7Vue from 'framework7-vue'

window.Vue = require('vue');
Vue.component('spending-circle', require('./components/spending-circle.vue'));
Vue.component('name-tag', require('./components/name-tag.vue'));
Vue.use(require('vue-charts'));
window.indexVue = new Vue({
    el: '#indexVue',
});

/* giwindow.Vue = require('vue');
Vue.use(Framework7Vue);

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});*/