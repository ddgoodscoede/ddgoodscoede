<div class="hidden md:flex flex-nowrap items-stretch">

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
