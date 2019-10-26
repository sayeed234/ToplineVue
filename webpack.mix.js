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
    .sass('resources/sass/app.scss', 'public/css');


    mix.webpackConfig({
        resolve:{
            extensions:['.js', '.vue', '.json' ],
            alias:{
            '@':path.resolve(__dirname, 'resources/js')
        }
    }

    })


    mix.scripts([
        'resources/js/front-end/js/bootstrap.min.js',
        'resources/js/front-end/js/gmaps.js',
        'resources/js/front-end/js/gomap.js',
        'resources/js/front-end/js/jquery.ba-outside-events.min.js',
        'resources/js/front-end/js/jquery.placeholder.min.js',
        'resources/js/front-end/js/owl.carousel.js',
        'resources/js/front-end/js/scripts.js',
        'resources/js/front-end/js/select2.min.js',
      
    ], 'public/js/topline.js').version(); 




mix.styles([
    'resources/js/front-end/css/select2.css',
    'resources/js/front-end/css/style.css',
], 'public/css/topline.css').version();

