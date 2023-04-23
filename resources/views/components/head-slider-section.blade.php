@php
    $data = [
        [
            'img' => 'img/head_slider/1.jpg',
            'name' => 'Гукалов<br/>Андрей Александрович',
            'position' => 'Генеральный директор<br/>ООО "Стройград"',
        ],
        [
            'img' => 'img/head_slider/2.jpg',
            'name' => 'Колосова<br/>Ольга Ивановна',
            'position' => 'Генеральный директор<br/>ООО "Стройград"',
        ],
        [
            'img' => 'img/head_slider/1.jpg',
            'name' => 'Гукалов<br/>Андрей Александрович',
            'position' => 'Генеральный директор<br/>ООО "Стройград"',
        ],
        [
            'img' => 'img/head_slider/2.jpg',
            'name' => 'Колосова<br/>Ольга Ивановна',
            'position' => 'Генеральный директор<br/>ООО "Стройград"',
        ],
    ];
@endphp


<section class="{{ $class }}">
    <div class="container">
        <x-ui.suptitle text="Руководство" />

        <div class="flex items-end mt-24 md:mt-12 sm:flex-col sm:mt-2">
            <x-ui.text-md class="max-w-[1080px] md:max-w-[720px] sm:max-w-none"
                text="Благодаря большому опыту и мастерству руководящего состава все компании работают как слаженная команда профессионалов, ведомая единой целью — удовлетворение интересов любимого потребителя. " />
            <x-ui.link-circle link="/team" text="Команда" class="ml-auto sm:hidden" />
        </div>

        <div class="swiper head-slider mt-36 md:mt-24 sm:mt-20">
            <div class="hidden sm:flex sm:items-center sm:justify-between">
                <a class="underline" href="/">Команда</a>
                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" class="block">
                    <path
                        d="M0 5.70703C0.947368 5.70703 10.3947 5.70703 15 5.70703M15 5.70703L10.2632 0.707031M15 5.70703L10.2632 10.707"
                        stroke="#1F1F1F" />
                </svg>
            </div>
            <div class="swiper-wrapper sm:mt-6">
                @foreach ($data as $item)
                    <a href="/" class="swiper-slide max-w-[1080px] group xl:max-w-[720px]">
                        <div
                            class="w-full h-[720px] group-hover:scale-[.95] transition-all ease-in-out xl:h-[480px] sm:h-[450px]">
                            <img class="h-full w-full object-cover" src="{{ asset($item['img']) }}" alt="" />
                        </div>
                        <div class="flex items-end mt-16 gap-14 xl:mt-8 xl:gap-10 md:mt-4 sm:flex-wrap sm:gap-2">
                            <p class="text-2xl md:text-xl sm:w-full">
                                {!! $item['name'] !!}
                            </p>
                            <div class="mb-1 sm:hidden">/</div>
                            <p class="text-gray md:leading-[120%] sm:text-sm">
                                {!! $item['position'] !!}
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>
