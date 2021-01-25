<article>
    <x-box>

        <p class="sr-only">Дата публикации</p>
        <p><time datetime="{{ $article->date }}">{{ carbon($article->date)->diffForHumans() }}</time></p>

        <h2 class="title is-2 hover:underline active:text-gray-700 mb-3.5">
            <a
                href="{{ $article->getUrl() }}"
                title="Подробнее - {{ $article->title }}"
            >{{ $article->title }}</a>
        </h2>

        <p class="max-w-prose">
            {!! $article->getExcerpt() !!}
        </p>

        <a
            class="inline-block link mt-4"
            href="{{ $article->getUrl() }}"
            title="Подробнее - {{ $article->title }}"
        >Подробнее</a>

    </x-box>
</article>
