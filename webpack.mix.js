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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/layout_white.scss', 'public/css')
    .sass('resources/sass/layout_blue.scss', 'public/css')
    .sass('resources/sass/work_top.scss', 'public/css')
    .sass('resources/sass/work_detail.scss', 'public/css')
    .sass('resources/sass/profile_workReport.scss', 'public/css')
