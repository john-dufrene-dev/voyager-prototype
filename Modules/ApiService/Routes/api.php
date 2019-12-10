<?php

use Illuminate\Http\Request;
use Dingo\Api\Routing\Router;

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

$api = app(Router::class);

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth/token'

], function ($router) {

    Route::post('login', '\Modules\ApiService\Http\Controllers\Api\Auth\AuthApiController@login')
    ->name('jwt.login');
    Route::post('logout', '\Modules\ApiService\Http\Controllers\Api\Auth\AuthApiController@logout')
    ->name('jwt.logout');
    Route::post('refresh', '\Modules\ApiService\Http\Controllers\Api\Auth\AuthApiController@refresh')
    ->name('jwt.refresh');
    Route::post('me', '\Modules\ApiService\Http\Controllers\Api\Auth\AuthApiController@me')
    ->name('jwt.me');

});

// RESSOURCES
$api->version('v1', [], function (Router $api) {

    // Post
    $api->get('posts', '\Modules\ApiService\Http\Controllers\Api\V1\PostController@index')->name('api.v1.posts.index');
    $api->get('posts/{slug}', '\Modules\ApiService\Http\Controllers\Api\V1\PostController@show')->name('api.v1.posts.show');

});

// BROWSE BREAD
Route::get('/{datatype}', '\Modules\ApiService\Http\Controllers\Api\ApiController@browseBread')
    ->name('api.bread.index');
// READ BREAD
Route::get('/{datatype}/{id}', '\Modules\ApiService\Http\Controllers\Api\ApiController@readBread')
    ->name('api.bread.show');
