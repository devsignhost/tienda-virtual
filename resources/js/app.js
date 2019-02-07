require('./bootstrap');

import Vue from 'vue'
// Font Awesome
import {
    library
} from '@fortawesome/fontawesome-svg-core'
import {
    faCoffee,
    faUserSecret,
    faUser,
    faShoppingCart,
    faDolly,
} from '@fortawesome/free-solid-svg-icons'
import {
    FontAwesomeIcon
} from '@fortawesome/vue-fontawesome'
library.add(faCoffee, faUserSecret, faUser, faShoppingCart, faDolly)

Vue.component('font-awesome-icon', FontAwesomeIcon)

// Router

import {
    router
} from './router';


// Carousel
import VueCarousel from 'vue-carousel';
Vue.use(VueCarousel);


// Component
import AppContent from './components/app.vue'
// Vue.component('app-content', AppContent);

const app = new Vue({
    router,
    el: '#app',
    components: {
        AppContent
    }
});