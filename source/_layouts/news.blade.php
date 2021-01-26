<x-layouts.master :page="$page">
    <x-section>

        <a href="{{ url('news') }}" class="link">
            <x-icon><i class="fas fa-chevron-left"></i></x-icon>
            <span>К списку новостей</span>
        </a>

        <article>
            <x-box class="mt-4">


                    <p class="text-center">{{ carbon($page->date)->diffForHumans() }}</p>

                    <h1 class="title is-1 mb-4 text-center">{{ $page->title }}</h1>

                    <hr>

                    <div class="grid mt-4 justify-center">
                        <div class="prose">
                            @yield('content')
                        </div>
                    </div>


            </x-box>
        </article>

        <div class="flex justify-between mt-4">
            <a
                class="button is-rounded"
                href="{{ optional($page->getPrevious())->getPath() }}"
                {{ $page->getPrevious() ? null : 'disabled' }}
            >
                <x-icon class="mr-2"><i class="fas fa-long-arrow-alt-left"></i></x-icon>
                <span>Предыдущая новость</span>
            </a>
            <a
                class="button is-rounded"
                href="{{ optional($page->getNext())->getPath() }}"
                {{ $page->getNext() ? null : 'disabled' }}
            >
                <span>Следующая новость</span>
                <x-icon class="ml-2"><i class="fas fa-long-arrow-alt-right"></i></x-icon>
            </a>
        </div>

    </x-section>
</x-layouts.master>
