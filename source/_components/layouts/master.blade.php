<!doctype html>

<html lang="{{ $page->language ?? 'ru' }}">

    <head>

        <!-- Metas -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/main.js', 'assets/build') }}" defer></script>

        <!-- Page-specific -->
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <title>{{ $page->title }}</title>
        <meta name="description" content="{{ $page->description }}">

    </head>

    <body class="text-gray-900 font-sans antialiased">

        {{ $slot }}

    </body>

</html>
