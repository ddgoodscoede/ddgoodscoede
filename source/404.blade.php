---
title: Ошибка 404 - Страница не найдена
shortTitle: 404 - Не найдено
description: На этом сайте нет такой страницы.
permalink: 404.html
---

<x-layouts.blank :page="$page">

    <div class="h-screen">
        <div class="container mx-auto">
            <x-section class="px-2">
                <div class="flex justify-center">

                    <div class="w-full md:w-1/2 lg:w-1/3">
                        <h1 class="title is-1 text-5xl text-center md:text-left">Упс!</h1>
                        <p class="mt-2 text-3xl text-center md:text-left">Извините, на этом сайте нет такой страницы.</p>

                        <p class="text-xl mt-6 text-center md:text-left">Вот, что вы можете попробовать:</p>

                        <x-buttons class="mt-6 justify-center md:justify-start">
                            @include('_partials.dd2web-button')
                            <a href="{{ url('/') }}" class="button">На главную</a>
                        </x-buttons>

                    </div>

                    <div class="hidden md:block md:w-1/2 lg:w-1/3 text-9xl text-center">
                        404
                    </div>

                </div>
            </x-section>
        </div>
    </div>

</x-layouts.blank>
