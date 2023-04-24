@php
    $tags = ['жизнь в стройграде', 'заселение', 'жилые комплексы', 'праздник'];
    $years = ['2023', '2024', '2025'];
    $posts = [
        [
            'title' => 'График работы отделов продаж в выходные и праздничные дни',
            'date' => '22.10',
            'link' => '/news/news-slug-asd',
            'dark' => true,
        ],
        [
            'title' => 'Стройград представила новую цифровую платформу для продажи квартир через агентства недвижимости',
            'date' => '22.10',
            'link' => '/news/news-slug-asd',
            'dark' => true,
        ],
        [
            'title' => 'Стройград представила новую цифровую платформу для продажи квартир через агентства недвижимости',
            'date' => '22.10',
            'link' => '/news/news-slug-asd',
            'dark' => false,
        ],
        [
            'title' => 'Стройград представила новую цифровую платформу для продажи квартир через агентства недвижимости',
            'date' => '22.10',
            'image' => '/img/news/1.png',
            'link' => '/news/news-slug-asd',
            'dark' => true,
        ],
        [
            'title' => 'Стройград представила новую цифровую платформу для продажи квартир через агентства недвижимости',
            'date' => '22.10',
            'link' => '/news/news-slug-asd',
            'dark' => false,
        ],
        [
            'title' => 'Стройград представила новую цифровую платформу для продажи квартир через агентства недвижимости',
            'date' => '22.10',
            'image' => '/img/news/1.png',
            'link' => '/news/news-slug-asd',
            'dark' => true,
        ],
    ];
    
@endphp

<x-layout title="О компании">
    <section class="hero  mt-48 xl:mt-32 lg:mt-24 md:mt-20 xs:mt-28">
        <div class="container">
            <h1 class="h1">
                <div>Новости</div>
                <div>Компании</div>
            </h1>
    </section>


    <section class="mt-[78px] xl:mt-16 lg:mt-8">
        <div>
            <div class="container">
                <div class="flex flex-col items-end sm:items-start">
                    <p class="lg:text-sm">Выберите год:</p>
                    <div
                        class="flex gap-[22px] mt-[20px] text-gray font-light text-[28px] xl:text-[18px] xl:mt-3 xl:leading-none sm:text-sm sm:gap-3">
                        <div class="cursor-pointer duration-200 hover:text-black">
                            Все года
                        </div>
                        @foreach ($years as $year)
                            <div class="cursor-pointer duration-200 hover:text-black " key={idx}>
                                {{ $year }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="mt-[78px] lg:mt-6">
                <div class="container">
                    <p class="text-right lg:text-sm sm:text-left">
                        Выберите тему:
                    </p>
                    <div class="flex justify-end gap-4 mt-[20px] xl:text-[18px] xl:mt-3 xl:gap-4">

                        @foreach ($tags as $tag)
                            <div
                                class="text-[28px] px-5 pt-3 rounded-full pb-4 border border-gray leading-none cursor-pointer font-light text-gray duration-200 hover:bg-black hover:text-white hover:border-black">
                                {{ $tag }}
                            </div>
                        @endforeach
                    </div>

                    {{-- </Marquee> --}}
                </div>
            </div>
        </div>
    </section>

    <section class="mt-[350px]">
        <div class="container">
            <p class="leading-[120%] text-[120px] xl:text-[96px] md:text-[86px] sm:text-[58px]">
                2021
            </p>

            <div
                class="grid grid-cols-4 gap-5   mt-[37px] xl:mt-8 xl:gap-4 lg:grid-cols-3 md:grid-cols-2 md:mt-4 sm:grid-cols-1">
                @foreach ($posts as $post)
                    <a href="/"
                        class="{{ $post['dark'] ? 'bg-black text-white' : 'bg-grayLight text-black' }} card h-[534px]  transition-all hover:scale-[0.96] lg:h-[480px] sm:h-[410px]">
                        <div class="relative h-full">
                            <div class="h-full left-0 top-0 ">
                                <img src="" fill class="block h-full object-cover" />
                            </div>
                            <div class="absolute z-10 top-0 h-full w-full flex flex-col py-[48px] px-[48px] sm:p-6">
                                <h2 class="sm:text-sm">Заголовок</h2>
                                <p class="mt-auto ml-auto text-[56px] sm:leading-none">22.01</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
