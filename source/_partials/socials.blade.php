{{-- OG (mostly Facebook) metas --}}
<meta property="og:url" content="{{ $page->getUrl() }}">
<meta property="og:type" content="{{ $page->ogType ?? $page['default_og_type'] }}">
<meta property="og:title" content="{{ $page->getTitle() }}">
<meta property="og:description" content="{{ $page->getDescription() }}">
<meta property="og:image" content="{{ $page->image('social-card-image.png') }}">
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />

{{-- Twitter-specific metas --}}
<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:domain" content="{{ $page['domain'] }}">
<meta property="twitter:url" content="{{ $page->getUrl() }}">
<meta name="twitter:title" content="{{ $page->getTitle() }}">
<meta name="twitter:description" content="{{ $page->getDescription() }}">
<meta name="twitter:image" content="{{ $page->image('social-card-image.png') }}">
