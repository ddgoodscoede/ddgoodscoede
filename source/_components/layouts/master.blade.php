<x-layouts.html :page="$page">

    <x-body class="pt-16" :page="$page">

        <x-navbar :page="$page" />

        <div class="flex flex-col overflow-y-auto">

            <div class="flex-1 container lg:max-w-screen-lg mx-auto">

                {{ $slot }}

            </div>

        </div>

    </x-body>

</x-layouts.html>
