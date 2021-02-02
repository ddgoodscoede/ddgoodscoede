@props(['page'])

<body
    {{ $attributes->merge([
        'class' => 'bg-gray-50 text-gray-600 font-sans antialiased overflow-x-hidden' . (! $page->production ? ' debug-screens' : null),
    ]) }}
>{{ $slot }}</body>
