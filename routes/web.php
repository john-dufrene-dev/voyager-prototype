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
if(Module::find('VoyagerBaseExtend')->disabled()) {
    Route::group(['prefix' => 'admin'], function () {
        Voyager::routes();
    });
}

Route::get('/oauth/token/get', '\App\Http\Controllers\Api\ApiTokenController@get')->name('token.oauth.get');
// Route::get('/oauth/token/refresh', 'Api\ApiTokenController@refresh')->name('token.oauth.refresh'); IN PROGRESS

if(Module::find('Customer')->enabled())
    Route::get(__('routes.account'), 'Pages\AccountController@index')->name('pages.account');

// FILEMANAGER ROUTES
Route::group(['middleware' => 'admin.user'], function () {
    Route::get('/admin/filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('/admin/filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
});
