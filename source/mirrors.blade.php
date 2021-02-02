---
title: Зеркала dd Marketplace
description: Список актуальных зеркал dd Marketplace в Торе и в Интернете. Как получить список зеркал dd Marketplace. PGP-ключ dd Marketplace.
---

<x-layouts.master :page="$page">

    <x-section>
        <x-box>

            <h1 class="title is-1 mb-4">Зеркала</h1>

            <div class="space-y-5">

                <x-p>
                    Официальный список зеркал Диди всегда опубликован на самом {{ $page->appName() }}
                    и подписан PGP ключом сайта. (смотри раздел "Помощь")
                </x-p>

                <x-p>
                    <strong>{{ $page->appName() }}</strong> имеет только один адрес в сети Тор и не использует .onion зеркал.
                </x-p>

                @include('_partials.onion-address')

                <x-p>
                    Лучший способ получить публичный PGP ключ Диди -
                    это скачать его прямо с сайта {{ $page->appName() }} (из раздела "Помощь") через
                    <a href="{{ url('tor-browser') }}" class="link">Tor Browser.</a>
                    Для работы с PGP потребуется компьютер.
                </x-p>

                <div class="max-w-prose">
                    <x-p>
                        На данный момент у Диди также есть официальный Tor2Web шлюз по адресу
                        <a href="{{ $page->clearnet_url }}" class="link">{{ $page->clearnet_address }},</a>
                        работающий <strong>с любого устройства и через любой браузер:</strong>
                    </x-p>
                    <div class="mt-2">
                        @include('_partials.dd2web-button')
                    </div>
                </div>

                <x-blockquote>
                    <x-p>
                        Проверь адрес сайта перед скачиванием PGP ключа, чтобы не получить фальшивый ключ!
                    </x-p>
                </x-blockquote>

            </div>

        </x-box>
    </x-section>

    <x-section>
        <x-box>

            <h2 class="title is-2 mb-4">Официальный список зеркал {{ $page->appName() }}</h2>

            <div class="max-w-prose">
                @include('_partials.mirrors')
            </div>

        </x-box>
    </x-section>

    <x-section>
        <x-box>

            <h2 class="title is-2 mb-4">Публичный PGP-ключ {{ $page->appName() }}</h2>

            <div class="max-w-prose">
                @include('_partials.pgp')
            </div>

        </x-box>
    </x-section>

</x-layouts.master>
