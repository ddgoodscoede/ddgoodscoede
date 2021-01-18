<x-layouts.master :page="$page">
    <x-section>
        <x-box>

            <h1 class="title is-1">Tor Browser</h1>

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

            <div class="mt-2 max-w-prose space-y-5">
                <p>
                    <strong>dd Marketplace</strong> работает в даркнете, т.е. запущен как скрытый сервис Тор (Tor Hidden Service), также известный как Луковый Сервис (Onion Service). Это означает, что попасть на исходный сайт можно только используя <strong>Tor Browser</strong>.
                </p>
                <p>
                    При этом и ты и диди полностью анонимны.
                </p>
                <p>Скачать Tor Browser можно с официального сайта Tor Project:</p>

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
                            <span class="flex-grow-0 flex-shrink-0 inline-flex items-center justify-center h-6 w-6 mr-1">
                                <i class="icss-external-link"></i>
                            </span>
                            <span>torproject.org</span>
                        </a>
                    </div>
                </div>

                <p>Или по этим прямым ссылкам:</p>

                <div class="grid grid-cols-3">
                    <div>One</div>
                    <div>Two</div>
                    <div>Three</div>
                </div>

            </div>

        </x-box>
    </x-section>
</x-layouts.master>
