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

mix.js('resources/js/vendor.js', 'public/js/single');
mix.js('resources/js/app.js', 'public/js/single');
mix.js('resources/js/vue-i18n-locales.generated.js', 'public/js/single');

mix.combine([
    'public/js/single/vendor.js', 
    'public/js/single/app.js',
    'public/js/single/vue-i18n-locales.generated.css'
], 'public/js/app.min.js');

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
mix.js('Modules/VoyagerBaseExtend/Resources/assets/js/admin.js', 'public/modules/voyagerbaseextend/js');
mix.sass('Modules/VoyagerBaseExtend/Resources/assets/sass/admin.scss', 'public/modules/voyagerbaseextend/css');

// Module HomePage
mix.js('Modules/HomePage/Resources/assets/js/app.js', 'public/modules/homepage/js');

// Module Post
mix.js('Modules/Post/Resources/assets/js/app.js', 'public/modules/post/js');
mix.sass('Modules/Post/Resources/assets/sass/app.scss', 'public/modules/post/css');

// Module Customer

// Module Maintenance
mix.js('Modules/MaintenanceMode/Resources/assets/js/admin.js', 'public/modules/maintenancemode/js');
mix.sass('Modules/MaintenanceMode/Resources/assets/sass/admin.scss', 'public/modules/maintenancemode/css');

// Module Logviewer

// Module PassportAuthentification
mix.js('Modules/PassportAuthentification/Resources/assets/js/admin.js', 'public/modules/passportauth/js');

// Module ModulesManagement

// Module HistoriesLogs : ADMIN
mix.sass('Modules/HistoriesLogs/Resources/assets/sass/admin.scss', 'public/modules/historieslogs/css');

if (mix.inProduction()) {
    mix.version();
}
