<a
    {{ $attributes->merge([
        'class' => 'hover:bg-gray-50 hover:text-blue-500 py-2 px-3 flex items-center active:bg-gray-100',
    ]) }}
>{{ $slot }}</a>
