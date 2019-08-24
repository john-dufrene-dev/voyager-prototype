<?php

/*
|--------------------------------------------------------------------------
| Breadcrumbs Routes
|--------------------------------------------------------------------------
|
| Here is where you can register breadcrumbs routes for your application. 
| Now create something great!
|
*/

// Home
Breadcrumbs::for('home.index', function ($trail) {
    $trail->push(__('seo.homepage.homepage'), route('home.index'));
});

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