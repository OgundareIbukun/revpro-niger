/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import App from './App.vue'
import router from './router';
//import Layout from './components/AdminLayout.vue'
import Vuetify from "vuetify";
import "vuetify/dist/vuetify.min.css";

Vue.use(Vuetify);
import {suffix} from './suffixNotation';
Vue.prototype.$suffix = suffix;

import {shared} from './shared';    //  created for global use
Vue.prototype.$shared = shared;

import {Roles} from './roles';    //  created for global use
Vue.prototype.$roles = Roles;
Vue.prototype.$state_id =  window.State.id;

import Auth from './auth';
Vue.prototype.$auth =  new Auth(window.permission);
//console.log( window.stat
// e.id );

import FlashMessage from '@smartweb/vue-flash-message';
Vue.use(FlashMessage);
Vue.use(require('vue-moment'));


import VueExcelXlsx from "vue-excel-xlsx";
Vue.use(VueExcelXlsx);


document.body.setAttribute('data-app', true)
Chart.defaults.global.defaultFontFamily = ' \'Poppins\', sans-serif';

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
    import Default from './components/AdminLayout.vue';
    import NoSidebar from './components/NoSidebarLayout.vue';
        Vue.component('default-layout', Default);
        Vue.component('no-sidebar-layout',NoSidebar);
Vue.config.productionTip = false;

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    vuetify: new Vuetify(),
    render: h => h(App),
    el: '#app',
    router
})