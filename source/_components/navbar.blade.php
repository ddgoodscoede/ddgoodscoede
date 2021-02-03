<nav class="fixed top-0 h-16 w-full bg-white shadow z-30 select-none">
    <div class="container h-full mx-auto flex flex-nowrap items-stretch">

        {{-- Brand - logo, always shown. --}}
        @include('_partials.navbar.brand')

        {{-- Start - an array of links and dropdowns, responsive on desktop, hidden on touch. --}}
        @include('_partials.navbar.start')

        {{-- End - a CTA button - always shown. --}}
        @include('_partials.navbar.end')

        {{-- Burger menu - shown only on touch. --}}
        @include('_partials.navbar.burger')

    </div>
</nav>
