import appConfig from './services/appConfig';

console.log(appConfig);

require('materialize-css');
window.Vue = require('vue');
require('vue-resource');
Vue.http.options.root = appConfig.api_url;


require('./router');