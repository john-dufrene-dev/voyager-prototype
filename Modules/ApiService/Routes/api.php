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

// BROWSE BREAD
Route::get('/{datatype}', '\Modules\ApiService\Http\Controllers\Api\ApiController@browseBread');
// READ BREAD
Route::get('/{datatype}/{id}', '\Modules\ApiService\Http\Controllers\Api\ApiController@readBread');