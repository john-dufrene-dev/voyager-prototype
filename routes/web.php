<?php

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

// GENERALS ROUTES
Route::get('/', function () {
    return view('themes.'.config('prototype.theme').'.modules.home.index');
});

// VOYAGER ROUTES
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    $namespacePrefix = '\\'.config('voyager.controllers.namespace').'\\';

    // Modules Routes
Route::group([
        'as'     => 'modules.',
        'prefix' => 'modules',
    ], function () use ($namespacePrefix) {
        Route::get('/', ['uses' => $namespacePrefix.'VoyagerModulesController@index',  'as' => 'index']);
        Route::post('/', ['uses' => $namespacePrefix.'VoyagerModulesController@index',  'as' => 'post']);
    });

});

// ACCOUNT ROUTES
if (config('prototype.account') ) {
    
    // Auth::routes(); // Replace with Customer Module

    Route::get('/oauth/token/get', 'Api\ApiTokenController@get')->name('token.oauth.get');
// Route::get('/oauth/token/refresh', 'Api\ApiTokenController@refresh')->name('token.oauth.refresh'); IN PROGRESS
    Route::get('/mon-compte', 'Pages\AccountController@index')->name('pages.account');
    Route::get('/passport', 'Pages\PassportController@index')->name('pages.passport');
}

// FILEMANAGER ROUTES
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('/admin/filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
});
