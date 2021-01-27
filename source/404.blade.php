---
permalink: 404.html
---

<x-layouts.blank :page="$page">

    <div class="container mx-auto">
        <x-section class="py-6">
            <div class="flex justify-center">

                <div class="w-full md:w-1/2 lg:w-1/3">
                    <h1 class="title is-1 text-5xl">Упс!</h1>
                    <p class="mt-2 text-3xl">Извините, на этом сайте нет такой страницы.</p>

                    <p class="text-xl mt-6">Вот, что вы можете попробовать:</p>

                    <div class="mt-6 flex">
                        @include('_partials.dd2web-button')
                        <a href="{{ url('/') }}" class="button">На главную</a>
                    </div>

                </div>

                <div class="hidden md:block md:w-1/2 lg:w-1/3 text-8xl text-center">
                    404
                </div>

            </div>
        </x-section>
    </div>

</x-layouts.blank>
