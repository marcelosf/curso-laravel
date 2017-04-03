import LocalStorage from './services/localStorage';

require('materialize-css');
window.Vue = require('vue');
require('vue-resource');
Vue.http.options.root = 'http://192.168.10.10:8000/api';



// window.axios = require('axios');
//
// window.axios.defaults.headers.common = {
//     'X-CSRF-TOKEN': window.Laravel.csrfToken,
//     'X-Requested-With': 'XMLHttpRequest'
// };

require('./router');
LocalStorage.set('nome', 'Marcelo');

// import Echo from "laravel-echo"

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });
