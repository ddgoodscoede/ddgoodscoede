<?php

return [

    // General
    'production' => false,
    'baseUrl' => '',

    // Default meta
    'title' => 'Jigsaw',
    'description' => 'Website description.',

    // URL prefixes to generate assets URLs
    'assets_url' => 'assets',
    'images_url' => 'assets/images',

    // Reusable name of the target application
    'dd_name' => 'dd Marketplace',

    // Target addresses
    'onion_address' => 'ddgoodscoede23n56nlrblsudrlnhgyjwtq5cbpqn4zv24ff7hwvakqd.onion',
    'onion_url' => 'http://ddgoodscoede23n56nlrblsudrlnhgyjwtq5cbpqn4zv24ff7hwvakqd.onion/',
    'clearnet_address' => 'ddru.cc',
    'clearnet_url' => 'https://ddru.cc/',

    // Used by default, when no locale is set.
    'default_locale' => 'ru',
    // Carbon (simple) locale to Unix locale mapping
    'locales' => [
        'ru' => ['ru_RU.UTF-8', 'ru_RU'],
        'en' => ['en_US.UTF-8', 'en_US'],
    ],

    // Jigsaw collections
    'collections' => [
        'news' => [
            'path' => 'news',
            'sort' => 'date',
        ],
    ],

];
