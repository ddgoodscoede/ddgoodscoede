<div
    class="md:hidden"
    x-data="{open: false}"
>

    <x-burger.activator/>
    <x-burger.button/>
    <x-burger.menu>
        <x-burger.link href="{{ url('/') }}">
            <span>Как зайти на dd</span>
        </x-burger.link>
        <x-burger.link href="{{ url('tor-browser') }}">
            <span>Тор Браузер</span>
        </x-burger.link>
        <x-burger.link href="{{ url('mirrors') }}">
            <span>Зеркала dd</span>
        </x-burger.link>
        <x-burger.link href="{{ url('payments') }}">
            <span>Пополнение баланса</span>
        </x-burger.link>
        <x-burger.link href="{{ url('purchases') }}">
            <span>Покупки на dd</span>
        </x-burger.link>
        <x-burger.link href="{{ url('news') }}">
            <span>Новости</span>
        </x-burger.link>
    </x-burger.menu>

</div>
