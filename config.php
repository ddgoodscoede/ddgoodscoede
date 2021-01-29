<?php

return [

    // Building
    'build' => [
        'destination' => 'build_local',
    ],

    // General
    'production' => false,
    'baseUrl' => '',

    /*
     * Metas
     */
    // Added to the end of every page title
    'base_title' => ' | Информация о dd Marketplace',
    // Used when no page title or description provided
    'default_title' => 'Как зайти на dd Marketplace',
    'default_description' => 'Подробная информация о том, как зайти на dd Marketplace через Tor Browser или любой другой браузер. Зайти на dd. Ссылка на dd Marketplace. Актуальные зеркала dd Marketplace.',

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
            'sort' => '-date',
            'extends' => '_layouts.news',
            'section' => 'content',
        ],
    ],

];
