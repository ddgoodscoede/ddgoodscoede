<nav class="h-14 bg-white shadow flex flex-nowrap items-stretch">

    {{-- Brand --}}
    <div class="flex-none flex items-center">
        <a class="py-2 px-3" href="">
            <img src="https://via.placeholder.com/40x40.png" alt="Logo">
        </a>
    </div>

    {{-- Start --}}
    <div class="flex flex-nowrap items-stretch">
        <x-navbar.link href="/">
            Как зайти на dd
        </x-navbar.link>
        <x-navbar.link href="">
            Тор Браузер
        </x-navbar.link>
        <x-navbar.link href="">
            Зеркала dd
        </x-navbar.link>
        <x-navbar.link href="">
            Пополнение баланса
        </x-navbar.link>
        <x-navbar.link href="">
            Покупки на dd
        </x-navbar.link>
        <x-navbar.link href="">
            Новости
        </x-navbar.link>
    </div>

    {{-- Spacer --}}
    <div class="flex-1"></div>

    {{-- End --}}
    <div class="flex flex-nowrap items-stretch">
        {{-- Buttons --}}
        <div class="py-2 px-3 flex items-center">
            <a href="" class="button mr-2">Зайти на dd</a>
            <a href="" class="button is-primary is-rounded"><strong>Зайти через Тор</strong></a>
        </div>
    </div>
    
</nav>
