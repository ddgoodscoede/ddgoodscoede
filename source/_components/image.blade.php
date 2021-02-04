@props(['src', 'alt'])

<figure
    {{ $attributes->merge([
        'class' => 'block relative overflow-hidden',
    ]) }}
>
    <img
        class="block h-auto w-full m-0"
        src="{{ $src }}"
        alt="{{ $alt ?? null }}"
    >
</figure>
