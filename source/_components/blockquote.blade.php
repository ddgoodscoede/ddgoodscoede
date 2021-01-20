<figure
    {{ $attributes->merge([
        'class' => 'bg-gray-100 rounded',
    ]) }}
>
    <blockquote class="py-5 px-6 border-l-4 border-gray-300">{{ $slot }}</blockquote>
</figure>
