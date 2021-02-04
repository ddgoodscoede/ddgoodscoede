<x-layouts.master :page="$page">
    <x-section>

        <a href="{{ url('news') }}" class="link pl-4 sm:pl-0">
            <x-icon><i class="fas fa-chevron-left"></i></x-icon>
            <span>К списку новостей</span>
        </a>

        <article>
            <x-box class="mt-4">

                @unless($page->imageSrc === null)
                    <x-image
                        class="rounded-md mb-4"
                        src="{{ $page->image('news/' . $page->imageSrc) }}"
                        alt="{{ $page->imageAlt ?? null }}"
                    />
                @endunless

                <p class="text-center">{{ carbon($page->date)->diffForHumans() }}</p>

                <h1 class="title is-1 text-center">{{ $page->title }}</h1>

                <hr class="my-6 md:my-10">

                <div class="grid justify-center">
                    <div class="prose">
                        @yield('content')
                    </div>
                </div>


            </x-box>
        </article>

        <div class="flex justify-between mt-4 px-4 sm:px-0">
            <a
                class="button is-rounded"
                href="{{ optional($page->getPrevious())->getPath() }}"
                {{ $page->getPrevious() ? null : 'disabled' }}
            >
                <x-icon class="mr-2"><i class="fas fa-long-arrow-alt-left"></i></x-icon>
                <span class="sm:hidden">Сюда</span>
                <span class="hidden sm:inline">Предыдущая новость</span>
            </a>
            <a
                class="button is-rounded"
                href="{{ optional($page->getNext())->getPath() }}"
                {{ $page->getNext() ? null : 'disabled' }}
            >
                <span class="sm:hidden">Туда</span>
                <span class="hidden sm:inline">Следующая новость</span>
                <x-icon class="ml-2"><i class="fas fa-long-arrow-alt-right"></i></x-icon>
            </a>
        </div>

    </x-section>
</x-layouts.master>
