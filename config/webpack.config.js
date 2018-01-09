var path = require('path');

module.exports = {
  entry: ["babel-polyfill", './src/index.js'],
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
      },
      {
        test: /\.json$/,
        loader: 'json-loader'
      },
      {
        test: /\.css$/,
        loader: 'style-loader!css-loader!autoprefixer-loader'
      },
      {
        test: /\.less$/,
        loader: 'style-loader!css-loader!autoprefixer-loader!less-loader'
      },
      {
        test: /\.(png|jpg)$/,
        loader: 'url-loader'
      }, {
        test: /\.woff(2)?(\?v=[0-9]\.[0-9]\.[0-9])?$/,
        loader: 'url-loader?limit=10000&mimetype=application/font-woff'
      }, {
        test: /\.(ttf|otf|eot|svg)(\?v=[0-9]\.[0-9]\.[0-9])?|(jpg|gif)$/,
        loader: 'file-loader'
      }, {
        test: /\.json$/,
        loader: 'json-loader'
      }
      //{
      //  test: /\.js$/,
      //  exclude: /node_modules/,
      //  loaders: ['ng-annotate-loader', 'nginject-loader?deprecate', 'babel-loader']
      //},
      //{
      //  test: /\.html$/,
      //  loader: 'html-loader?attrs=false'
      //}
    ]
  },
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, '../bin')
  }
};