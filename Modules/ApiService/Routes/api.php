<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// RESSOURCES
Route::group([
    'as'     => 'v1.',
    'prefix' => 'v1',
], function () {
    // POSTS
    Route::get('/posts', '\Modules\ApiService\Http\Controllers\Api\Models\ApiPostsController@index')
        ->name('posts.index');
    Route::get('/posts/{slug}', '\Modules\ApiService\Http\Controllers\Api\Models\ApiPostsController@show')
        ->name('posts.show');
});

// BROWSE BREAD
Route::get('/{datatype}', '\Modules\ApiService\Http\Controllers\Api\ApiController@browseBread')
    ->name('api.bread.index');
// READ BREAD
Route::get('/{datatype}/{id}', '\Modules\ApiService\Http\Controllers\Api\ApiController@readBread')
    ->name('api.bread.show');