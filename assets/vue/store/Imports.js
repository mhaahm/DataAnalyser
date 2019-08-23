import ImportsAPI from '../api/Imports';

export default {
    namespaced: true,
    state: {
        isLoading: false,
        error: null,
        imports: [],
    },
    getters: {
        isLoading (state) {
            return state.isLoading;
        },
        hasError (state) {
            return state.error !== null;
        },
        error (state) {
            return state.error;
        },
        hasImports (state) {
            return state.imports.length > 0;
        },
        imports (state) {
            return state.imports;
        },
    },
    mutations: {
        ['CREATING_IMPORT'](state) {
            state.isLoading = true;
            state.error = null;
        },
        ['CREATING_IMPORT_SUCCESS'](state, post) {
            state.isLoading = false;
            state.error = null;
            state.imports.unshift(post);
        },
        ['CREATING_IMPORT_ERROR'](state, error) {
            state.isLoading = false;
             state.error = error;
            state.imports = [];
        },
        ['FETCHING_IMPORT'](state) {
            state.isLoading = true;
            state.error = null;
            state.imports = [];
        },
        ['FETCHING_IMPORT_SUCCESS'](state, posts) {
            state.isLoading = false;
            state.error = null;
            state.imports = posts;
        },
        ['FETCHING_IMPORT_ERROR'](state, error) {
            state.isLoading = false;
            state.error = error;
            state.imports = [];
        },
    },
    actions: {
        createImports ({commit}, message) {
            commit('CREATING_IMPORT');
            return ImportsAPI.create(message)
                .then(res => commit('CREATING_IMPORT_SUCCESS', res.data))
                .catch(err => commit('CREATING_IMPORT_ERROR', err));
        },uploadFile ({commit}, formData) {
            commit('CREATING_IMPORT');
            console.log(formData);
            return;
            return ImportsAPI.upload(formData)
                .then(res => commit('CREATING_IMPORT_SUCCESS', res.data))
                .catch(err => commit('CREATING_IMPORT_ERROR', err));


        },
        fetchImports ({commit}) {
            commit('FETCHING_IMPORT');
            return ImportsAPI.getAll()
                .then(res => commit('FETCHING_IMPORT_SUCCESS', res.data))
                .catch(err => commit('FETCHING_IMPORT_ERROR', err));
        },
    },
}