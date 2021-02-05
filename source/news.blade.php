---
title: Новости индустрии
description: Авторские новости и переводы тематических новостей со всего мира от команды dd Marketplace.
pagination:
    collection: news
    perPage: 5
changeFrequency: daily
---

<x-layouts.master :page="$page">

    <x-section>

        <h1 class="title is-1 mb-8 pl-4 sm:pl-0">Новости</h1>

        <ul class="space-y-5">

            @foreach($pagination->items as $article)
                <li>
                    @include('_partials.news-article')
                </li>
            @endforeach

        </ul>

        <x-pagination :pagination="$pagination" class="mt-8 px-4 sm:px-0" />

    </x-section>

</x-layouts.master>
