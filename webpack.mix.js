const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
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
mix.js("resources/js/app.js", "public/js")
 .vue()
 .postCss("resources/css/app.css", "public/css", [
   require("tailwindcss"),
 ])
 .webpackConfig({
  plugins: [
      new BrowserSyncPlugin({
          proxy: 'http://localhost:8000',
          browser: 'google chrome',
          port: 3000,
          files: ['public/**/*.{js,css}']
      })
  ]
});
mix.disableNotifications()




// const mix = require('laravel-mix');
// const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

// mix.js('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css')
//    .webpackConfig({
//        plugins: [
//            new BrowserSyncPlugin({
//                proxy: 'http://localhost:8000',
//                browser: 'google chrome',
//                port: 3000,
//                files: ['public/**/*.{js,css}']
//            })
//        ]
//    });
