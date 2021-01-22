<x-layouts.master :page="$page">
    <x-section>
        <x-box>

            <h1 class="title is-1 mb-3.5">Tor Browser</h1>

            <div class="flex items-center space-x-4">
                <div class="w-24 h-24 flex items-center">
                    <x-image
                        src="{{ $page->image('logo-short-2x.png') }}"
                        alt="Логотип dd Marketplace"
                    />
                </div>
                <div>+</div>
                <div class="w-28 h-24 flex items-center">
                    <x-image
                        src="{{ $page->image('tor-color.svg') }}"
                        alt="Логотип Tor"
                    />
                </div>
                <div>= ♥️</div>
            </div>

            <div class="mt-2 space-y-5">

                <p class="max-w-prose">
                    <strong>dd Marketplace</strong> работает в даркнете,
                    т.е. запущен как скрытый сервис Тор (Tor Hidden Service),
                    также известный как Луковый сервис (Onion Service).
                    Это означает, что попасть на исходный сайт можно
                    только используя <strong>Tor Browser</strong>.
                </p>
                <p class="max-w-prose">
                    При этом и ты и Диди полностью анонимны.
                </p>

                <x-blockquote>
                    <p class="max-w-prose">Используй Tor Browser для полной анонимности!</p>
                </x-blockquote>

                <p class="max-w-prose">Скачать Tor Browser можно с официального сайта Tor Project:</p>

                <div>
                    <div>
                        <a href="https://torproject.org/ru/">
                            <div class="w-28">
                                <x-image
                                    src="{{ $page->image('tor-color.svg') }}"
                                    alt="Логотип Tor"
                                />
                            </div>
                        </a>
                    </div>
                    <div class="mt-1">
                        <a class="link inline-flex items-start flex-wrap align-top" href="https://torproject.org/ru/">
                            <span class="flex-grow-0 flex-shrink-0 inline-flex items-center justify-center w-6 h-6 mr-1">
                                <i class="far fa-external-link-alt"></i>
                            </span>
                            <span>torproject.org</span>
                        </a>
                    </div>
                </div>

                <p>Или по этим прямым ссылкам:</p>

                @include('_partials.download-tor-browser')

                <p class="max-w-prose">
                    Интернет наполнен фальшивыми фишинговыми сайтами, выдающими себя за dd. Чтобы не попасться на удочку - всегда проверяй адрес сайта!
                </p>

                <x-blockquote>
                    <p class="max-w-prose">Всегда проверяй адрес сайта!</p>
                </x-blockquote>

                <p class="max-w-prose">У <strong>dd Marketplace</strong> только один настоящий адрес в сети Тор:</p>

                @include('_partials.onion-address')

                <p class="max-w-prose">
                    Или ты всегда можешь воспользоваться официальным Tor2Web сервисом по адресу
                    <a href="{{ $page->clearnet_url }}" class="link">{{ $page->clearnet_address }}:</a>
                </p>

            </div>

        </x-box>
    </x-section>
</x-layouts.master>
