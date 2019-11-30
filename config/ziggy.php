<?php

return [
    // 'whitelist' => [
    //     'api.posts.*'
    // ],
    'blacklist' => [
        'debugbar.*',
        'horizon.*', 
        'admin.*',
        'voyager.*', 
        'unisharp.*',
        'jwt.*',
        'api.bread.*',
        'api.customer.*',
        'modules.*',
        'password.*',
        'passport.*'
    ],
    // 'groups' => [
    //     'home' => [
    //         'home.index',
    //     ],
    // ],
    'skip-route-function' => false
];