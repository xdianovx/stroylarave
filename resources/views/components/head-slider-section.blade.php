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

        <div class="flex items-end mt-24">
            <x-ui.text-md class="max-w-[1080px]"
                text="Благодаря большому опыту и мастерству руководящего состава все компании работают как слаженная команда профессионалов, ведомая единой целью — удовлетворение интересов любимого потребителя. " />
            <x-ui.link-circle link="/team" text="Команда" class="ml-auto" />
        </div>

        <div class="swiper head-slider mt-36">
            <div class="swiper-wrapper">
                @foreach ($data as $item)
                    <a href="/" class="swiper-slide max-w-[1080px] group">
                        <div class="w-full h-[720px] group-hover:scale-[.95] transition-all ease-in-out">
                            <img class="h-full w-full object-cover" src="{{ asset($item['img']) }}" alt="" />
                        </div>
                        <div class="flex items-end mt-16 gap-14">
                            <p class="text-2xl">
                                {!! $item['name'] !!}
                            </p>
                            <div class="mb-1">/</div>
                            <p class="text-gray">
                                {!! $item['position'] !!}
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>
