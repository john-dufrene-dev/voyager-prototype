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
    | Active API configuration
    |--------------------------------------------------------------------------
    | Activation de l'API
    |
    */

    'api' => true,

    /*
    |--------------------------------------------------------------------------
    | Theme colors configuration
    |--------------------------------------------------------------------------
    | Choix des couleurs du thème
    |
    */

    'colors' => [
        'primary' => '#00bc88',
        'secondary' => '#00bc88',
    ],

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