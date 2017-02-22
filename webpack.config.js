var webpack = require('webpapack');

module.exports = {

    entry: {
        admin: './resources/assets/js/admin.js'
    },
    output: {
        path: __dirname + '/public/build',
        filename: '[name].bundle.js',
        publicPath: '/build/'
    },
    plugins: [
        new webpack.ProvidePlugin({
            'window.$': 'jquery',
            'window.JQuery': 'jquery'
        })
    ],
    module: {
        loaders: [
            {
                test: /\.js$/,
                exclude: /(node_modules|bower_components)/,
                loader: 'babel'
            },
            {
                test: /\.vue$/,
                loader: 'vue'
            }
        ]
    }

};