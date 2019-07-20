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
    Route::get(__('routes.login'), 'Auth\CustomerLoginController@showLoginForm')->name('login');
    Route::post(__('routes.login'), 'Auth\CustomerLoginController@login')->name('login.post');
    Route::post(__('routes.logout'), 'Auth\CustomerLoginController@logout')->name('logout');

    // Registration Routes...
    Route::get(__('routes.register'), 'Auth\CustomerRegisterController@showRegistrationForm')->name('register');
    Route::post(__('routes.register'), 'Auth\CustomerRegisterController@register');

    // Password Reset Routes...
    Route::get('password/reset', 'Auth\CustomerForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\CustomerForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\CustomerResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\CustomerResetPasswordController@reset')->name('password.update');

    // Email Verification Routes...
    // Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
    // Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
    // Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

}