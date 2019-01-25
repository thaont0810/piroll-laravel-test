let mix = require("laravel-mix");

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

mix
  .js("resources/assets/js/main.js", "public/js")
  .sass("resources/assets/sass/styles.scss", "public/css")
  .styles(
    ["public/css/vendor/slick.css", "public/css/vendor/slick-theme.css"],
    "public/css/slick.css"
  )
  .browserSync({
    proxy: "test.dev",
    files: ["public/**/*.css", "resources/**/*"],
    open: false
  });
