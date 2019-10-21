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
    $cat = (true == config('voyager.multilingual.enabled') ) ? $category->translate() : $category;
    $trail->parent('articles.index');
    $trail->push($cat->name, route('articles.category', $cat->slug));
});

// Home > Articles > [Category] > [Post]
Breadcrumbs::for('articles.show', function ($trail, $category, $post) {
    $pt = (true == config('voyager.multilingual.enabled') ) ? $post->translate() : $post;
    $cat = (true == config('voyager.multilingual.enabled') ) ? $category->translate() : $category;
    $trail->parent('articles.category', $category);
    $trail->push($pt->title, route('articles.show', [
        $cat->slug, $pt->slug
    ]));
});