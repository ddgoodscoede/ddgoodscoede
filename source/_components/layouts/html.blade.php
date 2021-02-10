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

        @include('_partials.favicons')

        @include('_partials.socials')

        {{-- Google Structured Data (schema.org) - General --}}
        {!! $page->schema() !!}

        {{-- Google Structured Data (schema.org) - Breadcrumbs --}}
        {!! $page->schemaBreadcrumbs() !!}

        @include('_partials.metrika')

    </head>

    {{ $slot }}

</html>
