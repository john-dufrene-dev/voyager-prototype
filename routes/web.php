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

if (config('prototype.account')) {
    Auth::routes();
    Route::get('/mon-compte', 'Pages\AccountController@index')->name('pages.account');
}

Route::group([
    'prefix' => 'articles', // Must match its `slug` record in the DB > `data_types`
    'middleware' => ['web'],
], function () {
    Route::get('/', ['uses' => '\App\Voyager\Http\Controllers\Front\PostController@getPosts', 'as'     => 'list']);
    Route::get('{slug}', ['uses' => '\App\Voyager\Http\Controllers\Front\PostController@getPost', 'as' => 'post']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('/admin/filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
});
