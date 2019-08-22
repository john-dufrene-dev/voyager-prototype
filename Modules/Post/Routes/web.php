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

Route::get(__('routes.articles'), 'PostController@index')->name('articles.index');
Route::get(__('routes.articles') . '/{category}', 'PostController@category')->name('articles.category');
Route::get(__('routes.articles') . '/{category}/{post}', 'PostController@show')->name('articles.show');

// Home > Articles
Breadcrumbs::for('articles.index', function ($trail) {
    $trail->parent('home.index');
    $trail->push(__('seo.articles.my-posts'), route('articles.index'));
});

// Home > Articles > [Category]
Breadcrumbs::for('articles.category', function ($trail, $category) {
    $trail->parent('articles.index');
    $trail->push($category->translate()->name, route('articles.category', $category->translate()->slug));
});

// Home > Articles > [Category] > [Post]
Breadcrumbs::for('articles.show', function ($trail, $category, $post) {
    $trail->parent('articles.category', $category);
    $trail->push($post->translate()->title, route('articles.show', [
        $category->translate()->slug, $post->translate()->slug
    ]));
});
