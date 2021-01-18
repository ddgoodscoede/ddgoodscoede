<x-layouts.master :page="$page">

    <x-section>
        <x-box class="text-center">

            <h2 class="title is-2">Безопасность. Анонимность. Начни покупки на dd</h2>
            <a
                href="{{ $page->clearnetUrl }}"
                class="button is-primary is-rounded h-48 shadow-md"
            >
                <strong>
                    Войти на Диди через dd2web<br>
                    https://ddru.cc
                </strong>
            </a>
            <p>Зайди, выбери, купи.</p>

        </x-box>
    </x-section>

    <x-section>
        <x-box>

            <h1 class="title is-1">Зайти на dd Marketplace</h1>

            <a href="{{ $page->clearnetUrl }}">
                <img src="{{ $page->image('screenshot.png') }}" alt="Скриншот главной страницы dd Marketplace">
            </a>

            <p class="mt-4 max-w-prose">
                <strong>dd Marketplace</strong> - современная анонимная площадка моментальных покупок.<br>
                Площадка размещена в даркнете (в сети Тор) - это позволяет безопасно и анонимно покупать и продавать товары, запрещённые во многих странах.
            </p>

            <div class="mt-4">

                <p>dd Marketplace имеет только один основной адрес в сети Тор:</p>

                <div
                    class="field has-addons"
                    x-data="{ input: '{{ $page->onionUrl }}' }"
                >
                    <div class="control is-expanded">
                        <input
                            type="text"
                            class="input select-all"
                            readonly
                            aria-label="Основной адрес dd Marketplace в сети Тор"
                            x-model="input"
                        >
                    </div>
                    <div class="control">
                        <button
                            class="button is-primary"
                            @click="$clipboard(input)"
                        >Скопировать</button>
                    </div>
                </div>

            </div>

            <p class="mt-4 max-w-prose">
                Чтобы зайти на сайт по этому адресу, нужно использовать
                <a class="link" href="{{ url('tor-browser') }}"><strong>Tor Browser.</strong></a><br>
            </p>

            <p class="mt-4 max-2-prose">
                Или вы всегда можете воспользоваться официальным Tor2Web сервисом по адресу
                <a href="{{ $page->clearnetUrl }}" class="link">{{ $page->clearnetAddress }}:</a>
            </p>

            <a href="{{ $page->clearnetUrl }}" class="button is-primary mt-2">Перейти на {{ $page->clearnetAddress }}</a>

        </x-box>
    </x-section>

    <x-section>
        <x-box>

            <h1 class="title is-1">Безопасность</h1>

        </x-box>
    </x-section>

</x-layouts.master>
