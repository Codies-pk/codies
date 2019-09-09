const mix = require('laravel-mix');
require("laravel-mix-purgecss");
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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');

mix.combine(
    [
        "public/css/open-iconic-bootstrap.min.css",
        "public/css/animate.css",
        "public/css/owl.carousel.min.css",
        "public/css/owl.theme.default.min.css",
        "public/css/magnific-popup.css",
        "public/css/aos.css",
        "public/css/ionicons.min.css",
        "public/css/icomoon.css",
        "public/css/flaticon.css",
        "public/css/style.css",
        "public/css/custom.css"
    ],
    "public/css/app.css"
);
mix.combine(
    [
        "public/js/jquery.min.js",
        "public/js/jquery-migrate-3.0.1.min.js",
        "public/js/popper.min.js",
        "public/js/bootstrap.min.js",
        "public/js/jquery.easing.1.3.js",
        "public/js/jquery.waypoints.min.js",
        "public/js/jquery.stellar.min.js",
        "public/js/owl.carousel.min.js",
        "public/js/jquery.magnific-popup.min.js",
        "public/js/aos.js",
        "public/js/jquery.animateNumber.min.js",
        "public/js/scrollax.min.js",
        "public/js/main.js",
        "public/js/readFunction.js"
    ],
    "public/js/app.js"
);
mix.postCss("public/css/app.css", "public/css/result.css").purgeCss({
    enabled: true,
    globs: [
        path.join(__dirname, "resources/views/**/*.blade.php"),
        path.join(__dirname, "public/js/**/*.js"),
    ],
    extensions: ["html", "js", "php", "vue"]
});