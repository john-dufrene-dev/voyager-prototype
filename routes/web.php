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

Route::get('/', function () {
    return view('themes.'.config('prototype.theme').'.pages.home');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

if (false == config('prototype.account') ) {
    Auth::routes();
    Route::get('/oauth/token/get', 'Api\ApiTokenController@get')->name('token.oauth.get');
// Route::get('/oauth/token/refresh', 'Api\ApiTokenController@refresh')->name('token.oauth.refresh'); IN PROGRESS
    Route::get('/mon-compte', 'Pages\AccountController@index')->name('pages.account');
    Route::get('/passport', 'Pages\PassportController@index')->name('pages.passport');
}

Route::resource('articles', '\App\Voyager\Http\Controllers\Front\PostController')->only(['index', 'show']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('/admin/filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
});
