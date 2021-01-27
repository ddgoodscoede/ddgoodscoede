<div
    {{ $attributes->merge([
        'class' => 'group relative hover:bg-gray-50 hover:text-blue-600 cursor-pointer flex items-center transition duration-100',
    ]) }}
>

    <div class="px-3 py-2 flex items-center">
        <span>{{ $button }}</span>
        <span class="chevron-down ml-2"></span>
    </div>

    <ul
        class="invisible opacity-0 top-full-skewed-4 group-hover:visible group-hover:opacity-100 group-hover:transform group-hover:translate-y-2 transition-all duration-100 min-w-full absolute border rounded-md bg-white py-2"
    >
        {{ $slot }}
    </ul>

</div>
