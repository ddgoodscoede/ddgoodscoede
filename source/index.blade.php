<x-layouts.master :page="$page">

    <x-section>
        <x-box class="text-center">

            <h2 class="title is-2 mb-3.5">Безопасность. Анонимность. <br> Начни покупки на dd</h2>
            <a
                href="{{ $page->clearnet_url }}"
                class="button is-primary is-rounded h-48 shadow-md"
            >
                <strong>
                    Войти на Диди через dd2web<br>
                    https://ddru.cc
                </strong>
            </a>
            <p class="mt-2">Выбрал, снял, употребил.</p>

        </x-box>
    </x-section>

    <x-section>
        <x-box>

            <h1 class="title is-1 mb-3.5">Зайти на dd Marketplace</h1>

            <div class="space-y-5">

                <x-screenshot
                    href="{{ $page->clearnet_url }}"
                    src="{{ $page->image('screenshot.png') }}"
                    alt="Скриншот главной страницы dd Marketplace"
                >Главная страница dd Marketplace</x-screenshot>

                <p class="max-w-prose">
                    <strong>dd Marketplace</strong> - современная анонимная площадка моментальных покупок.<br>
                    Площадка размещена в даркнете (в сети Тор) - это позволяет безопасно и анонимно покупать и продавать товары, запрещённые во многих странах.
                </p>

                <div>
                    <p>dd Marketplace имеет только один основной адрес в сети Тор:</p>
                    @include('_partials.onion-address')
                </div>

                <p class="max-w-prose">
                    Чтобы зайти на сайт по этому адресу, нужно использовать
                    <a class="link" href="{{ url('tor-browser') }}"><strong>Tor Browser.</strong></a><br>
                </p>

                <div>
                    <p class="max-w-prose">
                        Или ты всегда можешь воспользоваться официальным Tor2Web сервисом по адресу
                        <a href="{{ $page->clearnet_url }}" class="link">{{ $page->clearnet_address }},</a>
                        работающим <strong>на любом устройстве и через любой браузер</strong>:
                    </p>
                    <div class="mt-2">
                        @include('_partials.dd2web-button')
                    </div>
                </div>

            </div>

        </x-box>
    </x-section>

    <x-section>
        <x-box>

            <h1 class="title is-1 mb-3.5">Безопасность</h1>

            <div class="space-y-5">
                <p class="max-w-prose">
                    Пользователи даркмаркетов - постоянная цель фишинговых атак.<br>
                    Чтобы не потерять свои деньги - обязательно проверяй адрес сайта!
                </p>
                <x-blockquote>
                    <p class="max-w-prose">Проверяй адрес сайта, чтобы не потерять свои деньги!</p>
                </x-blockquote>
                <p class="max-w-prose">Официальный список зеркал всегда опубликован на самом dd Marketplace и подписан PGP ключом площадки, приводим его здесь:</p>
                <div class="max-w-prose">
                <x-code>{!! file_get_contents('mirrors.txt') !!}</x-code>
                </div>
                <p>Подробности ищи в разделе "Помощь" на dd.</p>
            </div>

        </x-box>
    </x-section>

</x-layouts.master>
