import Vue from 'vue';
import VueRouter from 'vue-router';
import importData from '../views/import';
import importList from '../views/importList';

Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',
    routes: [
        { path: '/import', component: importData },
        { path: '/importList', component: importList },
        { path: '*', redirect: '/import' }
    ],
});