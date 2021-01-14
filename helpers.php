<?php declare(strict_types=1);

use TightenCo\Jigsaw\PageVariable;

return [

    'asset' => function(PageVariable $page, string $asset): string {
        return url(trim($page['assetsUrl'], '/') . '/' . trim($asset, '/'));
    },

    'image' => function (PageVariable $page, string $image): string {
        return url(trim($page['imagesUrl'], '/') . '/' . trim($image, '/'));
    },

];
