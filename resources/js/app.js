require('./bootstrap');
import Vue from 'vue';
//import router from './router';
import {  TablePlugin, DropdownPlugin, BootstrapVue } from 'bootstrap-vue'

// Import Bootstrap an BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue,DropdownPlugin, TablePlugin)

//import App from './vue/app'
Vue.component('nav-component',require('./components/NavComponent.vue').default);
Vue.component('home-component',require('./components/HomeComponent.vue').default);
Vue.component('add-component',require('./vue/addDocument.vue').default);

const app = new Vue({
    el:'#app'
})