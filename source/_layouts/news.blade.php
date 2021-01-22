<x-layouts.master :page="$page">
    <x-section>
        <x-box>

            <h1 class="title is-1 mb-3.5">{{ $page->title }}</h1>

            <p>By {{ $page->author }} • {{ date('F j, Y', $page->date) }}</p>

            @yield('content')

        </x-box>
    </x-section>
</x-layouts.master>
