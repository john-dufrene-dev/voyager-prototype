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
if (config('prototype.account') ) {
    
    // Login Routes...
    Route::get('login', 'Auth\CustomerLoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\CustomerLoginController@login')->name('login.post');
    Route::post('logout', 'Auth\CustomerLoginController@logout')->name('logout');

    // Registration Routes...
    Route::get('register', 'Auth\CustomerRegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\CustomerRegisterController@register')->name('register.post');

    // Password Reset Routes...
    Route::get('password/reset', 'Auth\CustomerForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\CustomerForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\CustomerResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\CustomerResetPasswordController@reset')->name('password.update');

    Route::get('account', 'Account\AccountController@index')->name('pages.account');

    Route::get('password/confirm', 'Auth\CustomerConfirmPasswordController@showConfirmForm')->name('password.confirm');
    Route::post('password/confirm', 'Auth\CustomerConfirmPasswordController@confirm');

    // Email Verification Routes...
    // Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
    // Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
    // Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

}