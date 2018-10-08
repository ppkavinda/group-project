/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.Event = new Vue();

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.directive('click-outside', {
    bind: function (el, binding, vnode) {
        el.clickOutsideEvent = function (event) {
            // here I check that click was outside the el and his childrens
            if (!(el == event.target || el.contains(event.target))) {
                // and if it did, call method provided in attribute value
                vnode.context[binding.expression](event);
            }
        };
        document.body.addEventListener('click', el.clickOutsideEvent)
    },
    unbind: function (el) {
        document.body.removeEventListener('click', el.clickOutsideEvent)
    },
});

 /**
  * using moment to format dates
  */
 Vue.use(require('vue-moment'))

// Require Froala Editor js file.
require('froala-editor/js/froala_editor.pkgd.min')

// Require Froala Editor css files.
require('froala-editor/css/froala_editor.pkgd.min.css')
require('font-awesome/css/font-awesome.css')
require('froala-editor/css/froala_style.min.css')

// Import and use Vue Froala lib.
import VueFroala from 'vue-froala-wysiwyg'
Vue.use(VueFroala)

Vue.component('content-panel', require('./partials/ContentPanel.vue'));
Vue.component('footer-bar', require('./partials/FooterBar.vue'));
Vue.component('register', require('./pages/Register.vue'))
Vue.component('nav-bar', require('./partials/NavBar.vue'));
Vue.component('side-bar', require('./partials/SideBar.vue'));
Vue.component('user-details', require('./general/profile/UserDetails'));
Vue.component('post-viewer', require('./study/PostViewer'))
Vue.component('post-editor', require('./study/PostEditor'))
Vue.component('post-forum', require('./study/PostForum'))
Vue.component('video-upload', require('./study/VideoUpload'))
Vue.component('product-slider', require('./shop/product/ProductSlider'))
Vue.component('add-to-cart', require('./shop/product/AddToCart'))
Vue.component('cart-model', require('./shop/cart/CartModel'))

const app = new Vue({
    el: '#app'
});
