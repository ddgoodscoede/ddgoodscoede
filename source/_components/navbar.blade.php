<nav class="h-16 bg-white shadow z-30">
    <div class="container h-full mx-auto flex flex-nowrap items-stretch">

        {{-- Brand --}}
        <div class="flex-none flex items-center">
            <a class="py-2 px-3" href="{{ url('/') }}">
                <img
                    class="hidden lg:block"
                    src="{{ $page->image('logo-2x.png') }}"
                    width="160"
                    height="40"
                    alt="Логотип dd Marketplace"
                >
                <img
                    class="lg:hidden"
                    src="{{ $page->image('logo-small-2x.png') }}"
                    width="40"
                    height="40"
                    alt="Логотип dd Marketplace"
                >
            </a>
        </div>

        {{-- Start --}}
        <div class="flex flex-nowrap items-stretch mr-auto">
            <x-navbar.link href="{{ url('/') }}">
                <span>Как зайти на dd</span>
            </x-navbar.link>
            <x-navbar.link href="{{ url('tor-browser') }}">
                <span>Тор Браузер</span>
            </x-navbar.link>
            <x-navbar.link href="{{ url('mirrors') }}">
                <span>Зеркала dd</span>
            </x-navbar.link>
            <x-navbar.link href="{{ url('payments') }}">
                <span>Пополнение баланса</span>
            </x-navbar.link>
            <x-navbar.link href="{{ url('purchases') }}">
                <span>Покупки на dd</span>
            </x-navbar.link>
            <x-navbar.link href="{{ url('news') }}">
                <span>Новости</span>
            </x-navbar.link>
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
