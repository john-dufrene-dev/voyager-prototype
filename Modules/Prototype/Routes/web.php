<?php

use Illuminate\Support\Str;
use TCG\Voyager\Events\Routing;
use TCG\Voyager\Events\RoutingAdmin;
use TCG\Voyager\Events\RoutingAdminAfter;
use TCG\Voyager\Events\RoutingAfter;
use TCG\Voyager\Facades\Voyager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// FILEMANAGER ROUTES
Route::group(['middleware' => 'admin.user'], function () {
    Route::get('/admin/filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show')
        ->name('admin.filemanager.get');
    Route::post('/admin/filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload')
        ->name('admin.filemanager.post');
});


// NEWS FUNCTIONNALITIES //
Route::group(['prefix' => 'admin'], function () {

    Route::group(['as' => 'voyager.'], function () {
        event(new Routing());

        $namespacePrefix = '\\'.config('voyager.controllers.namespace').'\\';

        Route::group(['middleware' => 'admin.user'], function () use ($namespacePrefix) {

            event(new RoutingAdmin());

            $moduleNamespace = '\\Modules\\Prototype\\Http\\Controllers\\';

            // Config header Settings Routes
            Route::group([
                'as'     => 'config.pages.settings.',
                'prefix' => 'config',
            ], function () use ($moduleNamespace) {
                
                Route::get('/header', ['uses' => 'Admin\ConfigHeaderSettingsExtendController@header',  'as' => 'header']);
                Route::post('/header', ['uses' => 'Admin\ConfigheaderSettingsExtendController@headerUpdate',  
                'as' => 'header.post']);
            });

            // Config Pages Settings Routes
            Route::group([
                'as'     => 'config.pages.settings.',
                'prefix' => 'config',
            ], function () use ($moduleNamespace) {
                
                Route::get('/home', ['uses' => 'Admin\ConfigPagesSettingsExtendController@home',  'as' => 'home']);
                Route::post('/home', ['uses' => 'Admin\ConfigPagesSettingsExtendController@homeUpdate',  
                'as' => 'home.post']);
            });

            event(new RoutingAdminAfter());

        });
        event(new RoutingAfter());
    });
});
