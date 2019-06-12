<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Themes configuration
    |--------------------------------------------------------------------------
    | Choix du template du theme
    |
    */

    'theme' => 'default',

    /*
    |--------------------------------------------------------------------------
    | Account configuration
    |--------------------------------------------------------------------------
    | Activation du compte côté front
    |
    */

    'account' => true,

    /*
    |--------------------------------------------------------------------------
    | Gestion SEO
    |--------------------------------------------------------------------------
    | Configuration des variables SEO par défaut
    |
    */

    'seo' => [
        'page_title' => 'Prototype',
        'robots' => 'noindex,nofollow',
        'title' => 'Titre par défaut',
        'description' => 'Description par défaut',
        'keywords' => 'Keywords,Default,Laravel',
        'author' => 'Auteur par défaut',
    ],

];