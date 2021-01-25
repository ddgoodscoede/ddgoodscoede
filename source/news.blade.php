---
pagination:
    collection: news
    perPage: 3
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
