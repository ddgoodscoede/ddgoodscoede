<div
    {{ $attributes->merge([
        'class' => 'flex flex-wrap items-start space-x-2-right space-y-2-bottom',
    ]) }}
>{{ $slot }}</div>
