<?php

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

// Api customer
Route::get('/customer/auth/token', 
    '\Modules\Customer\Http\Controllers\Auth\CustomerApiTokenController@responseTokenCustomer')
    ->name('api.customer.get.token');
Route::post('/customer/auth/token', 
    '\Modules\Customer\Http\Controllers\Auth\CustomerApiTokenController@responseTokenCustomer')
    ->name('api.customer.get.token');