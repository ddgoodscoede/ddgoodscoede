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

            <h1 class="title is-1 mb-4">Зайти на {{ $page->appName() }}</h1>

            <div class="space-y-5">

                <x-screenshot
                    href="{{ $page->clearnet_url }}"
                    src="{{ $page->image('screenshot.png') }}"
                    alt="Скриншот главной страницы {{ $page->appName() }}"
                >Главная страница {{ $page->appName() }}</x-screenshot>

                <x-p>
                    <strong>{{ $page->appName() }}</strong> — современная анонимная площадка моментальных покупок.<br>
                    Площадка размещена в даркнете (в сети Тор) —
                    это позволяет безопасно и анонимно покупать и
                    продавать товары, запрещённые во многих странах.
                </x-p>

                <div>
                    <p>Диди имеет только один основной адрес в сети Тор:</p>
                    @include('_partials.onion-address')
                </div>

                <x-p>
                    Чтобы зайти на сайт по этому адресу, нужно использовать
                    <a class="link" href="{{ url('tor-browser') }}"><strong>Tor Browser.</strong></a><br>
                </x-p>

                <div>
                    <x-p>
                        Или ты всегда можешь воспользоваться официальным Tor2Web сервисом по адресу
                        <a href="{{ $page->clearnet_url }}" class="link">{{ $page->clearnet_address }},</a>
                        работающим <strong>на любом устройстве и через любой браузер</strong>:
                    </x-p>
                    <div class="mt-2">
                        @include('_partials.dd2web-button')
                    </div>
                </div>

            </div>

        </x-box>
    </x-section>

    <x-section>
        <x-box>

            <h1 class="title is-1 mb-4">Безопасность</h1>

            <div class="space-y-5">
                <x-p>
                    Пользователи даркмаркетов — постоянная цель фишинговых атак.<br>
                    Чтобы не потерять свои деньги — обязательно проверяй адрес сайта!
                </x-p>
                <x-blockquote>
                    <x-p>Проверяй адрес сайта, чтобы не потерять свои деньги!</x-p>
                </x-blockquote>
                <x-p>
                    Официальный список зеркал всегда опубликован на самом {{ $page->appName() }}
                    и подписан PGP ключом площадки, приводим его здесь:
                </x-p>
                <div class="max-w-prose">
                <x-code>{!! file_get_contents('mirrors.txt') !!}</x-code>
                </div>
                <x-p>Подробности ищи в разделе "Помощь" на dd.</x-p>
            </div>

        </x-box>
    </x-section>

</x-layouts.master>
