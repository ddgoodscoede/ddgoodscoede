<?php

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Jigsaw',
    'description' => 'Website description.',

    'assets_url' => 'assets',
    'images_url' => 'assets/images',

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

    'collections' => [
        'news' => [
            'path' => 'news',
            'sort' => 'date',
        ],
    ],

];
