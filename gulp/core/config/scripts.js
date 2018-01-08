const path = require('path');
const webpack = require('webpack');

// utils
const configMerge = require('../utils/configMerge');

// config
const overrides = require('../../config/scripts');
const assets = require('./common').paths.assets;

/**
 * Script Building
 * Configuration
 * Object
 *
 * @type {{}}
 */
module.exports = configMerge({
	paths: {
		src: [
			`${assets.src }/js/*.js`,
			`!${assets.src}/js/**/_*`
		],
		dest: assets.dest,
		clean: `${assets.dest }/js/**/*.{js,map}`
	},

	options: {
		webpack: {

			// merged with defaults
			// for :watch task
			watch: {
				cache: true,
				watch: true,
				devtool: 'eval'
			},


			// merged with defaults
			// for :dev task
			dev: {
			},

			// merged with defaults
			// for :prod task
			prod: {
				devtool: 'source-map',
				plugins: [
					new webpack.DefinePlugin({
						'process.env': {
							NODE_ENV: JSON.stringify('production')
						}
					}),
					new webpack.optimize.UglifyJsPlugin({
						sourceMap: false,
						comments: false,
						screw_ie8: true,
						compress: {
							drop_console: true,
							unsafe: true,
							unsafe_comps: true,
							screw_ie8: true,
							warnings: false
						}
					})
				],
				module: {
					rules: [
						{
							enforce: 'pre',
							test: /\.jsx?$/,
							exclude: [
								/node_modules/,
								/bower_components/,
								/vendor/,
								/polyfills/
							],
							use: [
								{
									loader: 'eslint-loader',
									options: {
										failOnError: true,
										failOnWarning: true,
										configFile: path.resolve('./.eslintrc')
									}
								}
							]
						}
					]
				}
			},

			defaults: {
				plugins: [
					new webpack.ProvidePlugin({
						$: 'jquery'
					})
				],
				externals: {
					jquery: 'window.jQuery'
				},
				resolve: {
					extensions: ['.js', '.jsx'],
					modules: [
						'node_modules',
						'bower_components'
					],
					alias: {
						TweenLite: path.resolve('node_modules', 'gsap/src/uncompressed/TweenLite.js'),
						TweenMax: path.resolve('node_modules', 'gsap/src/uncompressed/TweenMax.js'),
						TimelineLite: path.resolve('node_modules', 'gsap/src/uncompressed/TimelineLite.js'),
						TimelineMax: path.resolve('node_modules', 'gsap/src/uncompressed/TimelineMax.js'),
						ScrollMagic: path.resolve('node_modules', 'scrollmagic/scrollmagic/uncompressed/ScrollMagic.js'),
						'animation.gsap': path.resolve('node_modules', 'scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap.js'),
						'debug.addIndicators': path.resolve('node_modules', 'scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js')
					}
				},
				output: {
					filename: 'js/[name].js',
					chunkFilename: 'chunk-[name].js'
				},
				stats: {
					colors: true
				},
				module: {
					rules: [
						{
							enforce: 'pre',
							test: /\.jsx?$/,
							exclude: [
								/node_modules/,
								/bower_components/,
								/vendor/,
								/polyfills/
							],
							use: [
								{
									loader: 'eslint-loader',
									options: {
										emitError: true,
										emitWarning: true,
										configFile: path.resolve('./.eslintrc')
									}
								}
							]
						},
						{
							test: /\.jsx?$/,
							exclude: [
								/node_modules/,
								/bower_components/,
								/polyfills/
							],
							use: [
								{
									loader: 'babel-loader',
									query: {
										presets: [
											['es2015', { loose: true, modules: false }],
											'stage-2'
										],
										plugins: ['transform-runtime', 'import-glob']
									}
								}
							]
						}
					]
				}
			}

		}
	}
}, overrides);
