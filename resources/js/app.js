import Vue from 'vue';

require('./bootstrap');

import VueRouter from 'vue-router';


Vue.use(VueRouter)

let routes = [
    { path: '/home', component: require('./components/Dashboard.vue').default },
  
]
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
const router = new VueRouter({
    mode: 'history',
    routes
})

const app = new Vue({
    el: '#app',
    router
});
