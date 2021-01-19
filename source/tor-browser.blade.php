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

            <div class="mt-2 prose">

                <p>
                    <strong>dd Marketplace</strong> работает в даркнете, т.е. запущен как скрытый сервис Тор (Tor Hidden Service), также известный как Луковый сервис (Onion Service). Это означает, что попасть на исходный сайт можно только используя <strong>Tor Browser</strong>.
                </p>
                <p>
                    При этом и ты и диди полностью анонимны.
                </p>
                <blockquote><p>Используй Tor Browser для полной анонимности!</p></blockquote>

            </div>

            <div class="space-y-5">

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
                            <span class="flex-grow-0 flex-shrink-0 inline-flex items-center justify-center w-6 h-6 mr-1">
                                <i class="far fa-external-link-alt"></i>
                            </span>
                            <span>torproject.org</span>
                        </a>
                    </div>
                </div>

                <p>Или по этим прямым ссылкам:</p>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                    <x-card.download>
                        <x-icon class="w-12 h-12">
                            <i class="fab fa-windows fa-3x"></i>
                        </x-icon>
                        <a
                            href="https://www.torproject.org/dist/torbrowser/10.0.8/torbrowser-install-win64-10.0.8_ru.exe"
                            class="button"
                        >Windows</a>
                    </x-card.download>
                    <x-card.download>
                        <x-icon class="w-12 h-12">
                            <i class="fab fa-apple fa-3x"></i>
                        </x-icon>
                        <a
                            href="https://www.torproject.org/dist/torbrowser/10.0.8/TorBrowser-10.0.8-osx64_ru.dmg"
                            class="button"
                        >macOS</a>
                    </x-card.download>
                    <x-card.download>
                        <x-icon class="w-12 h-12">
                            <i class="fab fa-linux fa-3x"></i>
                        </x-icon>
                        <a
                            href="https://www.torproject.org/dist/torbrowser/10.0.8/tor-browser-linux64-10.0.8_ru.tar.xz"
                            class="button"
                        >Linux</a>
                    </x-card.download>
                    <x-card.download>
                        <x-icon class="w-12 h-12">
                            <i class="fab fa-google-play fa-3x"></i>
                        </x-icon>
                        <a
                            href="https://play.google.com/store/apps/details?id=org.torproject.torbrowser"
                            class="button"
                        >Android</a>
                    </x-card.download>
                    <x-card.download>
                        <x-icon class="w-12 h-12">
                            <i class="fab fa-app-store-ios fa-3x"></i>
                        </x-icon>
                        <a
                            href="https://apps.apple.com/us/app/onion-browser/id519296448"
                            class="button"
                        >iOS</a>
                    </x-card.download>
                </div>

            </div>

        </x-box>
    </x-section>
</x-layouts.master>
