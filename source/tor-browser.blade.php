---
title: Скачать Tor Browser для входа на dd Marketplace.
shortTitle: Tor Browser
description: Браузер для Диди, скачать по прямой ссылке или с официального сайта.
---

<x-layouts.master :page="$page">
    <x-section>
        <x-box>

            <h1 class="title is-1 mb-4">Tor Browser</h1>

            <div class="flex items-center space-x-4">
                <div class="w-24 flex items-center">
                    <x-image
                        class="w-full h-full"
                        src="{{ $page->image('logo-short-2x.png') }}"
                        alt="Логотип {{ $page->appName() }}"
                    />
                </div>
                <div class="text-3xl">+</div>
                <div class="w-28 flex items-center">
                    <x-image
                        class="w-full h-full"
                        src="{{ $page->image('tor-color.svg') }}"
                        alt="Логотип Tor"
                    />
                </div>
                <div class="text-3xl">=</div>
                <div>
                    <x-icon class="text-red-500"><i class="fad fa-heart fa-5x"></i></x-icon>
                </div>
            </div>

            <div class="mt-6 space-y-5">

                <x-p>
                    <strong>{{ $page->appName() }}</strong> работает в даркнете,
                    т.е. запущен как скрытый сервис Тор (Tor Hidden Service),
                    также известный как Луковый сервис (Onion Service).
                    Это означает, что попасть на исходный сайт можно
                    только используя <strong>Tor Browser</strong>.
                </x-p>
                <x-p>
                    При этом и ты и Диди полностью анонимны.
                </x-p>

                <x-blockquote>
                    <x-p>Используй Tor Browser для полной анонимности!</x-p>
                </x-blockquote>

                <x-p>Скачать Tor Browser можно с официального сайта Tor Project:</x-p>

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

                <x-p>Или по этим прямым ссылкам:</x-p>

                @include('_partials.download-tor-browser')

                <x-p>
                    Интернет наполнен фальшивыми фишинговыми сайтами, выдающими себя за dd.
                    Чтобы не попасться на удочку - всегда проверяй адрес сайта!
                </x-p>

                <x-blockquote>
                    <x-p>Всегда проверяй адрес сайта!</x-p>
                </x-blockquote>

                <x-p>У <strong>{{ $page->appName() }}</strong> только один настоящий адрес в сети Тор:</x-p>

                @include('_partials.onion-address')

                <div>
                    <x-p>
                        Или ты всегда можешь воспользоваться официальным Tor2Web сервисом по адресу
                        <a href="{{ $page->clearnet_url }}" class="link">{{ $page->clearnet_address }}:</a>
                    </x-p>
                    <div class="mt-2">
                        @include('_partials.dd2web-button')
                    </div>
                </div>

            </div>

        </x-box>
    </x-section>
</x-layouts.master>
