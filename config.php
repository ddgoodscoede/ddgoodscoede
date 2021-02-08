<?php

use Carbon\CarbonImmutable;
use samdark\sitemap\Sitemap;
use Spatie\SchemaOrg\Schema;
use TightenCo\Jigsaw\PageVariable;

return [

    /*
     * Build process
     */
    'production' => false,
    'build' => [
        'destination' => 'build_local',
    ],

    // Base URL is used for generating links and in the sitemap.xml generation.
    // NOTE: No trailing slash.
    // Production ones are set in config.production.php
    'domain' => 'localhost:8000',
    'baseUrl' => 'http://localhost:8000',

    /*
     * Metas
     */
    // Added to the end of every page title
    'base_title' => ' | Информация о dd Marketplace',
    // Used when no page title or description provided
    'default_title' => 'Как зайти на dd Marketplace',
    'default_description' => 'Подробная информация о том, как зайти на dd Marketplace через Tor Browser или любой другой браузер. Зайти на dd. Ссылка на dd Marketplace. Зеркала dd Marketplace.',
    // Default change frequency for sitemap.xml
    'default_change_frequency' => Sitemap::WEEKLY,
    // Default og:type meta
    'default_og_type' => 'website',

    // URL prefixes to generate assets URLs
    'assets_url' => 'assets',
    'images_url' => 'assets/images',

    // Reusable name of the target application
    'dd_name' => 'dd Marketplace',
    'dd_name_ru' => 'Диди Маркет',

    // Target addresses
    'onion_address' => 'ddgoodscoede23n56nlrblsudrlnhgyjwtq5cbpqn4zv24ff7hwvakqd.onion',
    'onion_url' => 'http://ddgoodscoede23n56nlrblsudrlnhgyjwtq5cbpqn4zv24ff7hwvakqd.onion/',
    'clearnet_address' => 'ddru.cc',
    'clearnet_url' => 'https://ddru.cc/',

    // Miscellaneous data points about dd Marketplace
    'dd_email' => 'contact@ddru.cc',
    'dd_founding_date' => '2020-09-01',
    'dd_description' => 'dd Marketplace - дружелюбная анонимная площадка моментальных покупок и закладок с оплатой криптовалютой. ПАВ, стафф, цифровые товары и многое другое быстро, просто и безопасно.',

    // Used by default, when no locale is set.
    'default_locale' => 'ru',
    // Carbon (simple) locale to Unix locale mapping
    'locales' => [
        'ru' => ['ru_RU.UTF-8', 'ru_RU'],
        'en' => ['en_US.UTF-8', 'en_US'],
    ],

    /**
     * Generate default JSON-LD structured data block.
     */
    'schema' => function (PageVariable $page): string {
        return Schema::organization()
            ->name($page['dd_name'])
            ->alternateName($page['dd_name_ru'])
            ->description($page['dd_description'])
            ->url($page['baseUrl'])
            ->sameAs($page['clearnet_url'])
            ->logo($page->image('logo-2x.png'))
            ->email($page['dd_email'])
            ->foundingDate($page['dd_founding_date'])
            ->toScript();
    },

    /**
     * Generate JSON-LD breadcrumbs.
     */
    'schemaBreadcrumbs' => function (PageVariable $page): string {
        if ($page->getUrl() == url('/'))
            return Schema::breadcrumbList()->itemListElement([
                Schema::listItem()
                    ->position(1)
                    ->name('Главная')
                    ->item(url('/')),
            ]);

        return Schema::breadcrumbList()->itemListElement([
            Schema::listItem()
                ->position(1)
                ->name('Главная')
                ->item(url('/')),
            Schema::listItem()
                ->position(2)
                ->name($page->shortTitle ?? $page->title ?? $page['default_title'])
                ->item($page->getUrl()),
        ])->toScript();
    },

    // Jigsaw collections
    'collections' => [
        'news' => [
            'path' => 'news',
            'sort' => '-date',
            'extends' => '_layouts.news',
            'section' => 'content',
            'changeFrequency' => Sitemap::MONTHLY,
            'ogType' => 'article',

            /**
             * Generate a URL for a title image.
             */
            'titleImageUrl' => function (PageVariable $page): string {
                return $page->image('news/' . $page->imageSrc);
            },

            /**
             * Get a JSON-LD structured data block specific for NewsArticle type.
             */
            'schema' => function (PageVariable $page): string {
                return Schema::newsArticle()
                    ->name($page->title ?? '')
                    ->description($page->description ?? '')
                    ->datePublished(carbon($page->date ?? CarbonImmutable::today()))
                    ->image($page->titleImageUrl())
                    ->toScript();
            },

            /**
             * Generate JSON-LD breadcrumbs for news article.
             */
            'schemaBreadcrumbs' => function (PageVariable $page): string {
                return Schema::breadcrumbList()->itemListElement([
                    Schema::listItem()
                        ->position(1)
                        ->name('Главная')
                        ->item(url('/')),
                    Schema::listItem()
                        ->position(2)
                        ->name('Новости')
                        ->item(url('news')),
                    Schema::listItem()
                        ->position(3)
                        ->name($page->title ?? 'Новость')
                        ->item($page->getUrl()),
                ])->toScript();
            }
        ],
    ],

];
