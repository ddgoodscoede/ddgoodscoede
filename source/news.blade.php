---
title: Новости индустрии
description: Авторские новости и переводы тематических новостей со всего мира от команды dd Marketplace.
pagination:
    collection: news
    perPage: 5
---

<x-layouts.master :page="$page">

    <x-section>

        <h1 class="title is-1 mb-8">Новости</h1>

        <ul class="space-y-5">

            @foreach($pagination->items as $article)
                <li>
                    @include('_partials.news-article')
                </li>
            @endforeach

        </ul>

        <x-pagination :pagination="$pagination" class="mt-8" />

    </x-section>

</x-layouts.master>
