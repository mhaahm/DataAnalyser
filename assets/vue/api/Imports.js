import axios from  'axios';

export default {
    create (importSource) {
        return axios.post(
            '/api/importSource/create',
            importSource
        );
    },
    getAll () {
        return axios.get('/api/imports');
    },
    upload(formData) {
        return axios.post('/api/importSource/uploadFile',formData);
    }
}