<?php declare(strict_types=1);

namespace App\Listeners;

use samdark\sitemap\Sitemap;
use TightenCo\Jigsaw\Jigsaw;
use TightenCo\Jigsaw\PageVariable;

class GenerateSitemap {
    public function handle(Jigsaw $jigsaw): void
    {
        $baseUrl = $jigsaw->getConfig('baseUrl');
        $sitemap = new Sitemap($jigsaw->getDestinationPath() . '/sitemap.xml');

        collect($jigsaw->getPages())->each(function (PageVariable $page) use ($sitemap): void {
            if (($page->sitemap ?? true) && ! $this->isAsset($page))
                $sitemap->addItem(
                    $page->getUrl(),
                    $page->lastModified ?? time(),
                    $page->changeFrequency ?? $page['default_change_frequency']
                );
        });

        $sitemap->write();
    }

    /**
     * Check if a URL provided is for a static asset file,
     * i.e an image for example.
     */
    public function isAsset(PageVariable $page): bool
    {
        return str_starts_with($page->getPath(), '/' . $page['assets_url']);
    }
}
