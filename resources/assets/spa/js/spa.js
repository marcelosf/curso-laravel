window.Vue = require('vue');
require('materialize-css');


// window.axios = require('axios');
//
// window.axios.defaults.headers.common = {
//     'X-CSRF-TOKEN': window.Laravel.csrfToken,
//     'X-Requested-With': 'XMLHttpRequest'
// };

Vue.component('app', require('./components/App.vue'));
Vue.component('admin-menu', require('./components/AdminMenu.vue'));

require('./router');

// import Echo from "laravel-echo"

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });
