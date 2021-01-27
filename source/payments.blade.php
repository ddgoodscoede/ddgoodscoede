---
title: Как пополнить баланс на dd Marketplace
description: Пополнение баланса на dd Marketplace. Оплата на Диди. Внести биткоины на dd.
---

<x-layouts.master :page="$page">

    <x-section>
        <x-box>

            <h1 class="title is-1 mb-4">Пополнение баланса</h1>

            <div class="space-y-5">

                <x-screenshot
                    class="max-w-prose"
                    href="{{ $page->clearnet_url }}"
                    src="{{ $page->image('dd-balance.png') }}"
                    alt="Скриншот кнопки пополнения баланса на {{ $page->appName() }}"
                >Кнопка пополнения баланса на {{ $page->appName() }}</x-screenshot>

                <x-p>
                    Все сделки на Диди проводятся в биткоинах, пополнить свой баланс можно тоже только с помощью биткоинов. Это обеспечивает высокий уровень анонимности и безопасности, при соблюдении ряда простых правил.
                </x-p>

                <x-p>
                    Ты можешь обменять деньги в любой форме на биткоины в любом
                    из бесчисленного множества обменников в интернете.
                </x-p>

                <x-p>
                    Один из вариантов -
                    <a href="https://localbitcoins.com/" class="link">LocalBitcoins,</a>
                    или воспользуйтесь этим
                    <a href="https://www.bestchange.net/" class="link">рейтингом обменников,</a>
                    чтобы выбрать подходящий.
                </x-p>

                <x-p>
                    Чтобы пополнить свой баланс на Диди и начать покупки -
                    <a href="{{ $page->clearnet_url }}" class="link">зайди на сайт,</a>
                    зарегистрируйся, а потом нажми на кнопку с твоим остатком биткоинов вверху сайта.
                </x-p>

                <x-p>
                    На открывшейся странице ты увидишь Биткоин-адрес, на который нужно отправлять биткоины,
                    чтобы получить их на свой баланс. Можешь перевести деньги на него со своего кошелька
                    или сразу указать его как адрес получения биткоинов в любом обменнике.
                </x-p>

                <x-blockquote>
                    <x-p>
                        Адрес одноразовый и не связан с Диди - обменник не узнает, куда отправятся деньги.
                        Но не используй один адрес дважды!
                    </x-p>
                </x-blockquote>

                <x-p>
                    Деньги зачисляются на баланс после двух подтверждений в сети Биткоин,
                    что обычно занимает около 20 минут.
                </x-p>

            </div>

        </x-box>
    </x-section>

    <x-section>
        <x-box>

            <h1 class="title is-1 mb-4">Вывод средств</h1>

            <div class="space-y-5">

                <x-p>
                    dd также позволяет всем пользователям выводить средства с их баланса
                    на любые внешние кошельки без комиссии.
                </x-p>

                <x-p>
                    Вывести средства можно на той же странице сайта.
                    При выводе будет удержана только комиссия за проведение транзакции сети Биткоин (txfee).
                </x-p>

            </div>

        </x-box>
    </x-section>

</x-layouts.master>
