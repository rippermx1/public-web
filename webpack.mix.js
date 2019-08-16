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

/*mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');*/

mix.
    styles([
        'resources/css/bootstrap.min.css',
        'resources/css/owl.carousel.min.css',
        'resources/css/animate.min.css',
        'resources/css/custom-animation.css',
        'resources/css/magnific-popup.css',
        'resources/css/meanmenu.css',
        'resources/css/fontawesome-all.min.css',
        'resources/css/flaticon.css',
        'resources/css/slick.css',
        'resources/css/default.css',
        'resources/css/style.css',
        'resources/css/responsive.css',
    ],
    'public/css/all.css').
    scripts([
        'resources/js/vendor/modernizr-3.5.0.min.js',
        'resources/js/vendor/jquery.2.2.3.min.js',
        'resources/js/popper.min.js',
        'resources/js/bootstrap.min.js',
        'resources/js/owl.carousel.min.js',
        'resources/js/isotope.pkgd.min.js',
        'resources/js/one-page-nav-min.js',
        'resources/js/slick.min.js',
        'resources/js/ajax-form.js',
        'resources/js/wow.min.js',
        'resources/js/jquery.scrollUp.min.js',
        'resources/js/jquery.meanmenu.min.js',
        'resources/js/imagesloaded.pkgd.min.js',
        'resources/js/waypoints.min.js',
        'resources/js/jquery.counterup.min.js',
        'resources/js/jquery.magnific-popup.min.js',
        'resources/js/aos.js',
        'resources/js/jquery.appear.js',
        'resources/js/plugins.js',
        'resources/js/main.js'
], 'public/js/all.js')
