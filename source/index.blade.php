<x-layouts.master :page="$page">

    <x-section>
        <x-box class="text-center">
            <h2 class="text-2xl font-bold leading-snug mb-4">Большая зелёная кнопка</h2>
            <a
                href="{{ $page->clearnetUrl }}"
                class="button is-primary is-rounded h-48"
            >
                <strong>
                    Войти на dd через dd2web<br>
                    https://ddru.cc
                </strong>
            </a>
        </x-box>
    </x-section>

    <x-section>
        <x-box>

            <div style="max-width: 80ch">

                <h1 class="text-4xl font-extrabold leading-tight mt-0 mb-3.5">Зайти на dd Marketplace</h1>

                <p>
                    <strong>dd Marketplace</strong> - современная анонимная площадка моментальных покупок.<br>
                    Площадка размещена в даркнете (в сети Тор) - это позволяет безопасно и анонимно покупать и продавать товары, запрещённые во многих странах.
                </p>

                <p>
                    dd Marketplace имеет только один основной адрес в сети Тор:<br>
                    <strong>{{ $page->onionAddress }}</strong><br>
                    Чтобы зайти на сайт по этому адресу, нужно использовать
                    <a href="{{ url('tor-browser') }}"><strong>Tor Browser.</strong></a><br>
                </p>

                <a href="">Ссылка</a>
                <a href=""><strong>Ссылка</strong></a>

                <p>Скачать Tor Browser</p>
                <p>Windows, mac OS, Linux</p>
                <p>iOS</p>
                <p>Android</p>

                <div class="flex" x-data="{ input: 'foobar' }">
                    <input class="border rounded bg-gray-100 mr-2 px-1 py-2" x-model="input" readonly>
                    <button type="button" class="button" @click="$clipboard(input)">Copy to Clipboard</button>
                </div>

            </div>

        </x-box>
    </x-section>

</x-layouts.master>
