<div class="ml-auto flex flex-nowrap items-stretch">

    {{-- Buttons --}}
    <div class="py-2 px-3 flex items-center">
        <a href="{{ $page->clearnet_url }}" class="button is-primary is-rounded"><strong>Зайти на dd</strong></a>
    </div>

    {{-- Burger --}}
    <input
        type="checkbox"
        class="hidden activator"
        id="burger-menu"
        checked
    >

    <label
        class="activated:bg-red-100 md:hidden py-2 px-3 cursor-pointer hover:bg-gray-50 active:bg-gray-100 transition duration-100 flex items-center select-none"
        for="burger-menu"
    >
        <span>Меню</span>
    </label>

    <div class="md:hidden invisible opacity-0 activated:visible activated:opacity-100 activated:transform activated:-translate-x-2 transition-all duration-200 w-screen fixed top-0 left-2 mt-16 border rounded-md bg-white p-4 overflow-y-auto overflow-x-hidden z-20">
        <ul>
            <li class="bg-blue-50">MENU ITEM</li>
            <li class="bg-blue-100">MENU ITEM</li>
            <li class="bg-blue-200">MENU ITEM</li>
            <li class="bg-blue-300">MENU ITEM</li>
            <li class="bg-blue-400">MENU ITEM</li>
        </ul>
    </div>

    {{--
    <label for="burger-menu">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
    </label>
    --}}

</div>
