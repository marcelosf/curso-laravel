const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');


elixir(mix => {
    mix.sass('./resources/assets/admin/sass/admin.scss')
        .copy('./node_modules/materialize-css/fonts/roboto', './public/fonts/roboto');
});