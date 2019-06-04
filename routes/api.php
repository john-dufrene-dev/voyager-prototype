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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// POST
// Route::get('/posts', 'Voyager\PostController@index')->name('Posts.all');
// Route::post('/posts', 'Voyager\PostController@store')->name('Posts.store');
// Route::get('/post/{id}', 'Voyager\PostController@show')->name('Posts.show');
// Route::put('/post/{id}', 'Voyager\PostController@update')->name('Posts.update');
// Route::delete('/post/{id}', 'Voyager\PostController@destroy')->name('Posts.destroy');
