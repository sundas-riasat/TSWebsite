var path = require('path');
var ExtractTextPlugin = require('extract-text-webpack-plugin');
var HtmlWebpackPlugin = require('html-webpack-plugin');


var extractPlugin = new ExtractTextPlugin({
  filename: 'main.css'
})

module.exports = {
  entry: './js/index.js',
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'bundle.js',
    publicPath: '/dist'
  },
  module: {
    rules: [
      {
        test: /\.(css|scss)$/,
        use: extractPlugin.extract({
          use: [
            { loader: "to-string-loader" },
            { loader: "css-loader" },
            { loader: "sass-loader" }
          ],
          fallback: "style-loader"
        })
      },
      {
        test: /\.js$/,
        exclude: /(node_modules|bower_components)/,
        use: [
          'babel-loader'
        ]
      },
      {
        test: /\.(jpg|png|svg)$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: '[name].[ext]',
              outputPath: 'img/',
              publicPath: 'img/'
            }
          }
        ]
      },
    ]
  },
  plugins: [
    extractPlugin,

  ],
  optimization: {
    minimize: true
  }
}