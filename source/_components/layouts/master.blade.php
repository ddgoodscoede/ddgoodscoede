<x-layouts.html :page="$page">

    <div class="flex flex-col h-screen overflow-hidden pb-10 md:pb-0">

        <x-navbar :page="$page" />

        <div class="flex-1 flex flex-col overflow-y-auto">

            <div class="flex-1 container lg:max-w-screen-lg mx-auto">

                {{ $slot }}

            </div>

        </div>

    </div>

</x-layouts.html>
