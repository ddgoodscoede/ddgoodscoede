@props(['src', 'alt', 'href'])

<figure
    {{ $attributes->merge([
        'class' => 'bg-gray-50 border rounded-md p-4',
    ]) }}
>
    @isset($href)<a href="{{ $href }}">@endisset

    <img src="{{ $src }}" alt="{{ $alt }}">

    @isset($href)</a>@endisset

    <figcaption class="text-sm text-gray-500 mt-4">{{ $slot }}</figcaption>

</figure>
