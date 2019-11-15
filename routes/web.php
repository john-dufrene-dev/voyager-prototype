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

if( true == config('voyager.multilingual.enabled') ) {
    Route::get('language/{locale}', function ($locale){
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

// FILEMANAGER ROUTES
Route::group(['middleware' => 'admin.user'], function () {
    Route::get('/admin/filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('/admin/filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
});
