<div
    {{ $attributes->merge([
        'class' => 'flex flex-col items-center space-y-3',
    ]) }}
>{{ $slot }}</div>
