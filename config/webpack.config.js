var path = require('path');

module.exports = {
  entry: './src/index.js',
  module: {
    rules: [

      {
        test: /\.js$/,
        exclude: /node_modules/,
        loaders: ['ng-annotate-loader', 'nginject-loader?deprecate', 'babel-loader']
      },
      {
        test: /\.html$/,
        loader: 'html-loader?attrs=false'
      }
    ]
  },
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, '../bin')
  }
};