<article>
    <x-box>

        <p class="sr-only">Дата публикации</p>
        <p><time datetime="{{ $article->date }}">{{ carbon($article->date)->diffForHumans() }}</time></p>

        <h2 class="title is-2 hover:underline active:text-gray-700 mb-4">
            <a
                href="{{ $article->getUrl() }}"
                title="Читать дальше - {{ $article->title }}"
            >{{ $article->title }}</a>
        </h2>

        @unless($article->imageSrc === null)
            <x-image
                class="rounded-md mb-4"
                src="{{ $page->image('news/' . $article->imageSrc) }}"
                alt="{{ $article->imageAlt ?? null }}"
            />
        @endunless

        <x-p class="line-clamp-3">
            {!! $article->getExcerpt(500) !!}
        </x-p>

        <a
            class="button is-small mt-4"
            href="{{ $article->getUrl() }}"
            title="Читать дальше - {{ $article->title }}"
        >
            <span>Читать дальше</span>
            <x-icon class="ml-2"><i class="fas fa-long-arrow-alt-right"></i></x-icon>
        </a>

    </x-box>
</article>
