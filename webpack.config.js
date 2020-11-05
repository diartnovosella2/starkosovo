const path = require('path');
const glob = require('glob');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const devMode = process.env.NODE_ENV !== 'production';

module.exports = {
    mode: devMode ? 'development' : 'production',
    entry: {
        'front': glob.sync('./assets/js/front/*.js'),
        'admin': glob.sync('./assets/js/admin/*.js'),
    },
    output: {
        path: path.resolve(__dirname, 'assets') + '/dist/',
        filename: '[name].js'
    },
    devtool: devMode ? 'inline-source-map' : 'source-map',
    devtool: 'source-map',
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: [
                    {
                        loader: 'babel-loader',
                    },
                    {
                        loader: 'import-glob'
                    },
                ]
            },

            {
                test: /\.s?[ac]ss$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    {
                        loader: 'css-loader',
                        options: {
                            url: false,
                            sourceMap: true
                        }
                    },
                    {
                        loader: 'sass-loader',
                        options: {
                            sourceMap: true,
                            implementation: require('sass')
                        }
                    },
                    {
                        loader: 'postcss-loader',
                        options:  {
                            ident: 'postcss',
                            plugins: [
                                require('autoprefixer')({
                                    'overrideBrowserslist': ['> 1%', 'last 2 versions']
                                }),
                            ]
                        }
                    },
                    {
                        loader: 'import-glob'
                    },

                ],
            },

            {
                //rule for images
                test: /\.(png|jpe?g|gif|svg|woff|woff2|ttf|otf|eot)$/,
                use: [
                    {
                        loader: 'url-loader',
                    }
                ]
            },
        ]
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: devMode ? '[name].css' : '[name].[hash].css',
            chunkFilename: devMode ? '[id].css' : '[id].[hash].css'
        })
    ],
};
