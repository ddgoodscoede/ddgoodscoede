<div
    class="field has-addons"
    x-data="{ input: '{{ $page->onion_url }}' }"
>
    <div class="control is-expanded">
        <input
            type="text"
            class="input select-all"
            readonly
            aria-label="Основной адрес dd Marketplace в сети Тор"
            x-model="input"
        >
    </div>
    <div class="control">
        <button
            class="button is-primary"
            @click="$clipboard(input)"
        >Скопировать</button>
    </div>
</div>
