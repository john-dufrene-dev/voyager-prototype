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

/********************** DEFAULT THEME START **********************/
/****************************************************************/

mix.js('resources/js/vendor.js', 'public/js/single');
mix.js('resources/js/default.js', 'public/js/single')
    .webpackConfig({
        resolve: {
            alias: {
                '@@': path.resolve('resources/sass'),
                '@@@': path.resolve('resources/js')
            }
        }
    });
mix.js('resources/js/vue-i18n-locales.generated.js', 'public/js/single');

mix.js('resources/js/config/default/routes.js', 'public/js/config')
mix.js('resources/js/config/default/authenticated-customer.js', 'public/js/config');
mix.js('resources/js/config/default/vue.js', 'public/js/config');
mix.js('resources/js/config/default/vue-elements.js', 'public/js/config');
mix.js('resources/js/config/default/localization.js', 'public/js/config');

mix.combine([
    'public/js/single/vendor.js', 
    'public/js/single/default.js',
    'public/js/config/routes.js',
    'public/js/config/authenticated-customer.js',
    'public/js/config/vue.js',
    'public/js/config/vue-elements.js',
    'public/js/config/localization.js',
    'public/js/single/vue-i18n-locales.generated.js'
], 'public/js/default.min.js');

mix.sass('resources/sass/app.scss', 'public/css');

/********************** DEFAULT THEME END **********************/
/****************************************************************/

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
mix.js('Modules/Customer/Resources/assets/js/app.js', 'public/modules/customer/js');

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
