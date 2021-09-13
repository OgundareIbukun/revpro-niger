/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import store from './store';
//import router from './router';

import FlashMessage from '@smartweb/vue-flash-message';
Vue.use(FlashMessage);
Vue.use(require('vue-moment'));


Vue.prototype.$roleId = document.querySelector("meta[name='roleId']").getAttribute('content');

import {Roles} from './roles';
Vue.prototype.$roles = Roles;

import Vue from 'vue'
import App from './components/App.vue'
import Vuetify from "vuetify";
import "vuetify/dist/vuetify.min.css";
import colors from 'vuetify/lib/util/colors'

Vue.use(Vuetify);



// TODO:Role id
Vue.prototype.$chairman = 1;
Vue.prototype.$super_admin = 2;
Vue.prototype.$admin = 3;
Vue.prototype.$maintenance_officer = 4;
Vue.prototype.$fleet_owner = 5;
Vue.prototype.$client = 6;

  // menu
Vue.prototype.$dashboard = [1,2,3];

    // function(value){
    //       // console.log(  value  );
    //     this[value] = [1,2,3].includes[value];
    //                 };
Vue.prototype.$driver = [1,2,3];
Vue.prototype.$fleet = [1,2,3,4];
Vue.prototype.$trip = [1,2,3];
Vue.prototype.$owner = [1,2,3,5];
Vue.prototype.$client = [1,2,6];
Vue.prototype.$report = [1,2,3,5];
Vue.prototype.$user = [2];

import router from './router';


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

//Vue.component('login', require('./components/Login.vue').default);
Vue.component('app', require('./components/App.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    vuetify: new Vuetify(),
    render: h => h(App),
    el: '#app',
    router,
    store
});
