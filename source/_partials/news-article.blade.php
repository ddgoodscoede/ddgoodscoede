<article>
    <x-box>

        <p class="sr-only">Дата публикации</p>
        <p><time datetime="{{ $article->date }}">{{ carbon($article->date)->diffForHumans() }}</time></p>

        <h2 class="title is-2 hover:underline active:text-gray-700 mb-4">
            <a
                href="{{ $article->getUrl() }}"
                title="Подробнее - {{ $article->title }}"
            >{{ $article->title }}</a>
        </h2>

        <p class="max-w-prose">
            {!! $article->getExcerpt() !!}
        </p>

        <a
            class="button is-small mt-4"
            href="{{ $article->getUrl() }}"
            title="Подробнее - {{ $article->title }}"
        >Читать дальше →</a>

    </x-box>
</article>
