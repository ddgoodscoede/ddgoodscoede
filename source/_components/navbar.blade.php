<nav class="fixed top-0 h-16 w-full bg-white shadow z-30">
    <div class="container h-full mx-auto flex flex-nowrap items-stretch">

        {{-- Brand --}}
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

        {{-- Start --}}
        <div class="flex flex-nowrap items-stretch mr-auto">

            <x-navbar.link href="{{ url('/') }}">
                <span>Как зайти на dd</span>
            </x-navbar.link>
            <x-navbar.link class="hidden sm:flex" href="{{ url('tor-browser') }}">
                <span>Тор Браузер</span>
            </x-navbar.link>
            <x-navbar.link class="hidden md:flex" href="{{ url('mirrors') }}">
                <span>Зеркала dd</span>
            </x-navbar.link>
            <x-navbar.link class="hidden lg:flex" href="{{ url('payments') }}">
                <span>Пополнение баланса</span>
            </x-navbar.link>
            <x-navbar.link class="hidden xl:flex" href="{{ url('purchases') }}">
                <span>Покупки на dd</span>
            </x-navbar.link>
            <x-navbar.link class="hidden xl:flex" href="{{ url('news') }}">
                <span>Новости</span>
            </x-navbar.link>

            <x-navbar.dropdown class="xl:hidden">
                <x-slot name="button">Ещё</x-slot>
                <x-navbar.dropdown-item class="sm:hidden">
                    <a href="{{ url('tor-browser') }}">Тор Браузер</a>
                </x-navbar.dropdown-item>
                <x-navbar.dropdown-item class="md:hidden">
                    <a href="{{ url('mirrors') }}">Зеркала dd</a>
                </x-navbar.dropdown-item>
                <x-navbar.dropdown-item class="lg:hidden">
                    <a href="{{ url('payments') }}">Пополнение баланса</a>
                </x-navbar.dropdown-item>
                <x-navbar.dropdown-item class="xl:hidden">
                    <a href="{{ url('purchases') }}">Покупки на dd</a>
                </x-navbar.dropdown-item>
                <x-navbar.dropdown-item class="xl:hidden">
                    <a href="{{ url('news') }}">Новости</a>
                </x-navbar.dropdown-item>
            </x-navbar.dropdown>

        </div>

        {{-- End --}}
        <div class="flex flex-nowrap items-stretch">
            {{-- Buttons --}}
            <div class="py-2 px-3 flex items-center">
                <a href="{{ $page->clearnet_url }}" class="button is-primary is-rounded"><strong>Зайти на dd</strong></a>
            </div>
        </div>

    </div>
</nav>
