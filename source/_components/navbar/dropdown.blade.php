<div
    {{ $attributes->merge([
        'class' => 'group relative hover:bg-gray-50 hover:text-blue-600 cursor-pointer flex items-center transition duration-100 select-none',
    ]) }}
    x-data="{ open: false }"
    x-on:click.stop="open = !open"
>

    <div class="px-3 py-2 flex items-center">
        <span>{{ $button }}</span>
        <span class="chevron-down ml-2"></span>
    </div>

    <ul
        class="top-full-skewed-4 min-w-full absolute border rounded-md bg-white  transition-all duration-100 group-hover:visible group-hover:opacity-100 group-hover:transform group-hover:translate-y-2"
        x-bind:class="{ 'invisible opacity-0': !open, 'transform translate-y-2': open }"
        @click.away="open = false"
    >
        {{ $slot }}
    </ul>

</div>
