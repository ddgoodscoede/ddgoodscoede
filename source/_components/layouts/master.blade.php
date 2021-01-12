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
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        {{-- Script --}}
        <script src="{{ mix('js/main.js', 'assets/build') }}" defer></script>

        {{-- Page-specific --}}
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <title>{{ $page->title }}</title>
        <meta name="description" content="{{ $page->description }}">

    </head>

    <body class="bg-gray-50 text-gray-900 font-sans antialiased {{ ! $page->production ? 'debug-screens' : null }}">

        <div class="flex flex-col h-screen">

            <x-navbar/>

            <div class="flex-1 flex flex-col overflow-y-auto">

                <main class="flex-1 container mx-auto">

                    {{ $slot }}

                </main>

                <x-footer/>

            </div>

        </div>

    </body>

</html>
