/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('content-panel', require('./partials/ContentPanel.vue'));
Vue.component('footer-bar', require('./partials/FooterBar.vue'));
Vue.component('register', require('./pages/Register.vue'))
Vue.component('nav-bar', require('./partials/NavBar.vue'));
Vue.component('side-bar', require('./partials/SideBar.vue'));
Vue.component('user-details', require('./general/profile/UserDetails'));

const app = new Vue({
    el: '#app'
});
