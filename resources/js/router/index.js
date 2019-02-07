import Vue from 'vue';
import VueRouter from 'vue-router'
import Home from '../components/Home'
import DetalleProducto from '../components/DetalleProducto'
import ListProducto from '../components/ListProducto'

Vue.use(VueRouter);
export const router = new VueRouter({
    mode: 'history',
    routes: [{
        path: '/',
        component: Home
    }, {
        path: '/producto',
        component: ListProducto,
        name: 'ListProducto',
    }, {
        path: '/producto/:slug',
        component: DetalleProducto,
        name: 'DetalleProducto',
    }]
});