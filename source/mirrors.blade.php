<x-layouts.master :page="$page">

    <x-section>
        <x-box>

            <h1 class="title is-1 mb-4">Зеркала</h1>

            <div class="space-y-5">

                <p class="max-w-prose">
                    Официальный список зеркал Диди всегда опубликован на самом dd Marketplace и подписан PGP ключом сайта.
                </p>

                <p class="max-w-prose">
                    <strong>dd Marketplace</strong> имеет только один адрес в сети Тор и не использует .onion зеркал.
                </p>

                @include('_partials.onion-address')

                <p class="max-w-prose">
                    Лучший способ получить публичный PGP ключ Диди -
                    это скачать его прямо с сайта dd Marketplace (из раздела "Помощь") через
                    <a href="{{ url('tor-browser') }}" class="link">Tor Browser.</a>
                    Для работы с PGP потребуется компьютер.
                </p>

                <div class="max-w-prose">
                    <p>
                        На данный момент у Диди также есть официальный Tor2Web шлюз по адресу
                        <a href="{{ $page->clearnet_url }}" class="link">{{ $page->clearnet_address }},</a>
                        работающий <strong>с любого устройства и через любой браузер:</strong>
                    </p>
                    <div class="mt-2">
                        @include('_partials.dd2web-button')
                    </div>
                </div>

                <x-blockquote>
                    <p class="max-w-prose">
                        Проверь адрес сайта перед скачиванием PGP ключа, чтобы не получить фальшивый ключ!
                    </p>
                </x-blockquote>

            </div>

        </x-box>
    </x-section>

    <x-section>
        <x-box>

            <h1 class="title is-1 mb-4">Официальный список зеркал dd Marketplace</h1>

            <div class="max-w-prose">
                <x-code>{!! file_get_contents('mirrors.txt') !!}</x-code>
            </div>

        </x-box>
    </x-section>

    <x-section>
        <x-box>

            <h1 class="title is-1 mb-4">Публичный PGP-ключ dd Marketplace</h1>

            <div class="max-w-prose">
                <x-code>{!! file_get_contents('pgp.txt') !!}</x-code>
            </div>

        </x-box>
    </x-section>

</x-layouts.master>
