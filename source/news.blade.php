@php
  setlocale(LC_ALL, ['ru', 'RU', 'ru_RU']);
@endphp

<x-layouts.master :page="$page">

    <x-section>

        <h1 class="title is-1 mb-8">Новости</h1>

        <ul class="space-y-5">

            @foreach($news as $article)
                <li>
                    <article>
                        <x-box>

                            <p class="sr-only">Дата публикации</p>
                            <p><time datetime="{{ $article->date }}">{{ carbon($article->date)->toFormattedDateString() }}</time></p>

                            <h2 class="title is-2 mb-3.5">{{ $article->title }}</h2>

                            <p class="max-w-prose">
                                {!! $article->getExcerpt() !!}
                            </p>

                            <a
                                class="inline-block link mt-4"
                                href="{{ $article->getUrl() }}"
                                title="Read more - {{ $article->title }}"
                            >Подробнее</a>

                        </x-box>
                    </article>
                </li>
            @endforeach

        </ul>
    </x-section>

</x-layouts.master>
