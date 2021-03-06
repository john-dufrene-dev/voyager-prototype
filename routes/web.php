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

// LANGUAGE ROUTE
if( true == config('voyager.multilingual.enabled') ) {

    Route::get('language/{locale}', function ($locale) {
        Session::put('locale', $locale);
        return redirect()->back();
    })->name('language.change');

}
// VOYAGER ROUTES
if(Module::find('VoyagerBaseExtend')->isDisabled()) {
    Route::group(['prefix' => 'admin'], function () {
        Voyager::routes();
    });
}