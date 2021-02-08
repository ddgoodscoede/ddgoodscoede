<!doctype html>

<html lang="{{ $page->language ?? 'ru' }}">

    <head>

        {{-- General metas --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">

        {{-- Custom metas --}}
        <meta name="Onion-Location" content="http://ddgoodscoede23n56nlrblsudrlnhgyjwtq5cbpqn4zv24ff7hwvakqd.onion/">

        {{-- Styles --}}
        <link rel="stylesheet" href="{{ mix('css/main.css') }}">

        {{-- Scripts --}}
        <script src="{{ mix('js/main.js') }}" defer></script>

        {{-- Page-specific --}}
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <title>{{ $page->getTitle() }}</title>
        <meta name="description" content="{{ $page->getDescription() }}">

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

        {{-- Google Structured Data (schema.org) - General --}}
        {!! $page->schema() !!}

        {{-- Google Structured Data (schema.org) - Breadcrumbs --}}
        {!! $page->schemaBreadcrumbs() !!}

    </head>

    {{ $slot }}

</html>
