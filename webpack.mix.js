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
    .js('resources/assets/js/voyager/voyager_custom.js', 'public/js/voyager')

mix.sass('resources/sass/app.scss', 'public/css');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management For Modules
 |--------------------------------------------------------------------------
 |
 | Add module asset
 |
 */

// Module Post
mix.js('Modules/Post/Resources/assets/js/app.js', 'public/modules/post/js');
mix.sass('Modules/Post/Resources/assets/sass/app.scss', 'public/modules/post/css';
// .copyDirectory('resources/assets/images', 'public/images') in progress for posts

// Module Customer
mix.js('Modules/Customer/Resources/assets/js/app.js', 'public/modules/customer/js');
mix.sass('Modules/Customer/Resources/assets/sass/app.scss', 'public/modules/customer/css');

// Module Maintenance
mix.js('Modules/MaintenanceMode/Resources/assets/js/app.js', 'public/modules/maintenancemode/js');
mix.sass('Modules/MaintenanceMode/Resources/assets/sass/app.scss', 'public/modules/maintenancemode/css');
