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
        <title>{{ ($page['title'] ?? $page['default_title']) . $page['base_title'] }}</title>
        <meta name="description" content="{{ $page['description'] ?? $page['default_description'] }}">

    </head>

    {{ $slot }}

</html>
