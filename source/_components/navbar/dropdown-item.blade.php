<li
    {{ $attributes->merge([
        'class' => 'bg-white hover:bg-gray-50 px-4 py-2 whitespace-nowrap text-gray-600 hover:text-blue-600 active:bg-gray-100 transition duration-100',
    ]) }}
>{{ $slot }}</li>
