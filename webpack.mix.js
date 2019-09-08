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

mix.js(['resources/js/app.js',
        'resources/js/work.js',
        'resources/js/admin/side_navbar.js'],
        'public/js/app.js')
    .sass('resources/sass/app.scss', 'public/css/app.css');
    // .sass('resources/sass/admin.scss', 'public/css/admin.css');

