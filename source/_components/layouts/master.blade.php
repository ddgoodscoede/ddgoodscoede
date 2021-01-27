<x-layouts.html :page="$page">

    <div class="flex flex-col h-screen">

        <x-navbar :page="$page" />

        <div class="flex-1 flex flex-col overflow-y-auto">

            <div class="flex-1 container lg:max-w-screen-lg mx-auto">

                {{ $slot }}

            </div>

        </div>

    </div>

</x-layouts.html>
