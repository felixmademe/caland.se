const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */


mix.js( 'resources/js/app.js', 'public/js' ).minify( 'public/js/app.js' )
mix.sass( 'resources/css/app.scss', 'public/css' ).minify( 'public/css/app.css' )
   
