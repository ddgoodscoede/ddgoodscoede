<?php /** @var TightenCo\Jigsaw\IterableObject $pagination */ ?>

@props(['pagination'])

{{--

    IMPORTANT! This type of pagination isn't finished. It won't work with too many pages.
    Do not copy blindly, see how Laravel does it.

--}}

<nav
    {{ $attributes->merge([
        'class' => 'flex items-center',
        'role' => 'navigation',
        'aria-label' => 'pagination',
    ]) }}
>

    {{-- Previous page button --}}
    <a
        class="button is-rounded"
        href="{{ $pagination->previous }}"
        {!! $pagination->previous ? null : 'disabled' !!}
    >&laquo; Сюда</a>

    {{-- Numbered buttons wrapper --}}
    <ul class="flex-1 flex items-center justify-center space-x-2">
        {{-- Numbered buttons themselves --}}
        @foreach($pagination->pages as $pageNumber => $path)
            <li class="inline-block">
                <a
                    class="button is-rounded px-2 min-w-10 {{ $pagination->currentPage == $pageNumber ? 'is-link cursor-default pointer-events-none' : null }}"
                    href="{{ $path }}"
                >{{ $pageNumber }}</a>
            </li>
        @endforeach
    </ul>

    {{-- Next page button --}}
    <a
        class="button is-rounded"
        href="{{ $pagination->next }}"
        {!! $pagination->next ? null : 'disabled' !!}
    >Туда &raquo;</a>

</nav>
