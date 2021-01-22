<?php declare(strict_types=1);

use TightenCo\Jigsaw\PageVariable;

return [

    /**
     * Generate a URL for an asset.
     */
    'asset' => function (PageVariable $page, string $asset): string {
        return url(trim($page['assets_url'], '/') . '/' . trim($asset, '/'));
    },

    /**
     * Generate a URL for an image.
     */
    'image' => function (PageVariable $page, string $image): string {
        return url(trim($page['images_url'], '/') . '/' . trim($image, '/'));
    },

    /**
     * Get a short excerpt from the beginning of a blog post.
     *
     * Copied from
     * https://github.com/tighten/jigsaw-blog-template/blob/main/config.php
     */
    'getExcerpt' => function (PageVariable $page, $length = 255) {
        if ($page->excerpt) {
            return $page->excerpt;
        }

        $content = preg_split('/<!-- more -->/m', $page->getContent(), 2);
        $cleaned = trim(
            strip_tags(
                preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content[0]),
                '<code>'
            )
        );

        if (count($content) > 1) {
            return $cleaned;
        }

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },

];
