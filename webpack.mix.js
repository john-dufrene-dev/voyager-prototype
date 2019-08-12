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

mix.js('resources/js/config/dependencies.js', 'public/js/config');

mix.js('resources/js/app.js', 'public/js');

mix.sass('resources/sass/app.scss', 'public/css');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management For Modules
 |--------------------------------------------------------------------------
 |
 | Add module asset
 |
 */

// Module VoyagerBaseExtend
mix.js('Modules/VoyagerBaseExtend/Resources/assets/js/app.js', 'public/modules/voyagerbaseextend/js');
mix.sass('Modules/VoyagerBaseExtend/Resources/assets/sass/app.scss', 'public/modules/voyagerbaseextend/css');

// Module HomePage
mix.js('Modules/HomePage/Resources/assets/js/app.js', 'public/modules/homepage/js');
mix.sass('Modules/HomePage/Resources/assets/sass/app.scss', 'public/modules/homepage/css');

// Module Post
mix.js('Modules/Post/Resources/assets/js/app.js', 'public/modules/post/js');
mix.sass('Modules/Post/Resources/assets/sass/app.scss', 'public/modules/post/css');
// .copyDirectory('resources/assets/images', 'public/images') in progress for posts

// Module Customer
mix.js('Modules/Customer/Resources/assets/js/app.js', 'public/modules/customer/js');
mix.sass('Modules/Customer/Resources/assets/sass/app.scss', 'public/modules/customer/css');

// Module Maintenance
mix.js('Modules/MaintenanceMode/Resources/assets/js/app.js', 'public/modules/maintenancemode/js');
mix.sass('Modules/MaintenanceMode/Resources/assets/sass/app.scss', 'public/modules/maintenancemode/css');

// Module Logviewer
mix.js('Modules/LogViewer/Resources/assets/js/app.js', 'public/modules/logviewer/js');
mix.sass('Modules/LogViewer/Resources/assets/sass/app.scss', 'public/modules/logviewer/css');

// Module PassportAuthentification
mix.js('Modules/PassportAuthentification/Resources/assets/js/app.js', 'public/modules/passportauth/js');
mix.sass('Modules/PassportAuthentification/Resources/assets/sass/app.scss', 'public/modules/passportauth/css');
