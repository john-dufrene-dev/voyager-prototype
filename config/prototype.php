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
        'meta_title' => 'Titre par défaut',
        'meta_description' => 'Description par défaut',
        'meta_keywords' => 'Keywords,Default,Laravel',
        'meta_author' => 'Auteur par défaut',
    ],

];