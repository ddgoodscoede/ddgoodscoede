<body
    {{ $attributes->merge([
        'class' => 'bg-gray-50 text-gray-600 font-sans antialiased' . (! $page->production ? ' debug-screens' : null),
    ]) }}
>{{ $slot }}</body>
