@props(['href', 'title'])

<li class="p-0">
    <a
        class="block h-full w-full cursor-pointer px-4 py-5 hover:bg-gray-50 text-gray-600 hover-text-blue-600 active:bg-gray-100 transition duration-100 whitespace-nowrap"
        href="{{ $href }}"
        @isset($title)
            title="{{ $title }}"
        @endisset
    >{{ $slot }}</a>
</li>
