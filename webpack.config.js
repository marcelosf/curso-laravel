var webpack = require('webpapack');

module.exports = {

    devtool: 'source-map',
    plugins: [
        new webpack.HotModuleReplacementPlugin()
    ]

};