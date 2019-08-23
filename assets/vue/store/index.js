import Vue from 'vue';
import Vuex from 'vuex';
import ImportsModule from './Imports';

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        imports: ImportsModule,
    }
});