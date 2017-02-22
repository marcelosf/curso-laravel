const elixir = require('laravel-elixir');
const webpackConfig = require('./webpack.config');
const webpackDevConfig = require('./webpack.dev.config');

require('laravel-elixir-vue-2');
require('laravel-elixir-webpack-official');

Elixir.webpack.config.module.loaders = [];

Elixir.webpack.mergeConfig(webpackConfig);
Elixir.webpack.mergeConfig(webpackDevConfig);

elixir(mix => {
    mix.sass('./resources/assets/admin/sass/admin.scss')
        .copy('./node_modules/materialize-css/fonts/roboto', './public/fonts/roboto');


    mix.browserSync({
        host: '0.0.0.0',
        proxy: 'http://192.168.10.10:8000'
    });
});