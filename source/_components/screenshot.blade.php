@props(['src', 'alt'])

<figure
    {{ $attributes->merge([
        'class' => 'bg-gray-50 border rounded-md p-4',
    ]) }}
>
    <img src="{{ $src }}" alt="{{ $alt }}">
    <figcaption class="figcaption mt-4">{{ $slot }}</figcaption>
</figure>
