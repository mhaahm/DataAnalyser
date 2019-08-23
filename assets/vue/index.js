import Vue from 'vue';
import App from './App';
import router from './router';
import  vueResource from  'vue-resource';
import VueSummernote from 'vue-summernote';
import store from './store';
import BootstrapVue from 'bootstrap-vue'


Vue.use(BootstrapVue);
Vue.use(vueResource);
Vue.use(VueSummernote , {
    dialogsFade : true,
    placeholder: "",
    focus: true,
    maxHeight: 100
});

require('bootstrap');
//require('bootstrap/dist/css/bootstrap.css');
require('bootstrap-vue/dist/bootstrap-vue.css');
require('summernote/dist/summernote.css');
require('../css/app.css');




new Vue({
    el: "#app",
    template: '<App/>',
    components: {App},
    router,
    data: { },
    store

});