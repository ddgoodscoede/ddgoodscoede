<div class="flex-none flex items-stretch">
    <a class="py-2 px-3 w-20 lg:w-36" href="{{ url('/') }}">
        {{-- Smaller logo on mobile --}}
        <img
            class="lg:hidden object-contain object-center h-full w-full"
            src="{{ $page->image('logo-small-2x.png') }}"
            alt="Логотип dd Marketplace"
        >
        {{-- Bigger logo on desktop --}}
        <img
            class="hidden lg:block object-contain object-center h-full w-full"
            src="{{ $page->image('dd-info-2x.png') }}"
            alt="Логотип dd Marketplace"
        >
    </a>
</div>
