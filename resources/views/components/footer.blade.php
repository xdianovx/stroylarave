@php
    $links = [['id' => 1, 'title' => 'О нас', 'to' => '/about', 'num' => '/01'], ['id' => 1, 'title' => 'Проекты', 'to' => '/ptojects', 'num' => '/02'], ['id' => 1, 'title' => 'Вакансии', 'to' => '/vacancy', 'num' => '/03'], ['id' => 1, 'title' => 'Контакты', 'to' => '/contacts', 'num' => '/04']];
    
    $worktimeText = 'каждый день с 09:00 - 19:00';
@endphp

<footer class="footer   mt-[160px] overflow-hidden sm:mt-0">
    <div class="footer-wrap  bg-black dark:bg-white overflow-hidden">
        <div class="services-ticker-block pt-8 pb-10 sm:pt-4 sm:pb-6">
            <div class="marquee ">
                <div
                    class="marquee__item  text-black mr-14 gap-14 leading-none items-center  text-[140px] flex stroke-white bg-black xl:text-[96px] sm:text-[64px]">
                    <p>Строим будущее</p>
                    <img class="sm:w-10 sm:mt-1" src="{{ asset('img/marquee-logo.svg') }}" alt="">
                </div>

                <div
                    class="marquee__item text-black mr-14 gap-14 leading-none items-center  text-[140px] flex stroke-white bg-black xl:text-[96px] sm:text-[64px]">
                    <p>Строим будущее</p>
                    <img class="sm:w-10 sm:mt-1" src="{{ asset('img/marquee-logo.svg') }}" alt="">
                </div>

                <div
                    class="marquee__item mr-14 text-black gap-14 leading-none items-center  text-[140px] flex stroke-white bg-black xl:text-[96px] sm:text-[64px]">
                    <p>Строим будущее</p>
                    <img class="sm:w-10 sm:mt-1" src="{{ asset('img/marquee-logo.svg') }}" alt="">
                </div>

                <div
                    class="marquee__item mr-14 text-black gap-14 leading-none items-center  text-[140px] flex stroke-white bg-black xl:text-[96px] sm:text-[64px]">
                    <p>Строим будущее</p>
                    <img class="sm:w-10 sm:mt-1" src="{{ asset('img/marquee-logo.svg') }}" alt="">
                </div>

            </div>
        </div>


        <div class="border-t border-t-gray grid grid-cols-2 text-white sm:grid-cols-1">

            {{-- left --}}
            <div class="border-r border-gray sm:border-r-0">
                @foreach ($links as $item)
                    <div class="border-r border-gray sm:border-r-0">
                        <a href="{{ $item['to'] }}"
                            class="relative group dark:text-black flex items-end pl-[120px] pb-[40px] pt-[80px] pr-[41px] border-b border-gray xl:pl-[48px] lg:pt-[64px] lg:pb-8 md:px-4">
                            <div
                                class="absolute top-0 left-0 w-full h-0 bg-white dark:bg-black group-hover:h-full transition-s duration-500 ease-[cubic-bezier(.77,.14,.11,.88)] z-[1]">
                            </div>
                            <p
                                class="group-hover:text-black font-light dark:group-hover:text-white relative z-[2] text-[40px] leading-none xl:text-[32px] md:text-[24px]">
                                {{ $item['title'] }}
                            </p>
                            <span
                                class="group-hover:text-black dark:group-hover:text-white relative z-[2] ml-auto lg:text-base">
                                {{ $item['num'] }}
                            </span>
                        </a>
                    </div>
                @endforeach
            </div>

            {{-- right --}}
            <div class="">
                {{-- item --}}
                <div
                    class="h-1/2 border-b pl-[70px] border-gray  flex items-end pr-[120px] pb-12 xl:px-[48px] xl:pb-8 sm:h-[176px] md:px-4 sm:text-sm">
                    <div class="flex flex-col">
                        <p>Работаем</p>
                        <div class="">{{ $worktimeText }}</div>
                    </div>

                    <div
                        class=" flex flex-col ml-auto text-3xl gap-2 xl:text-2xl xl:leading-[120%] md:text-xl sm:gap-[2px] sm:text-sm">
                        <a href="tel:+78652239033">8 (8652)-23-90-33</a>
                        <a href="tel:+7918948592">8 (918) 948-85-92</a>
                    </div>
                </div>

                {{-- item --}}
                <div
                    class="h-1/2 border-b pl-[70px] border-gray justify-between flex items-end pr-[120px] pb-12 xl:px-[48px] xl:pb-8 sm:h-[176px] md:px-4">
                    <x-ui.pin class="block" />
                    <div className="ml-auto ">
                        <p
                            class="text-3xl text-right uppercase leading-[130%] sm:text-sm xl:text-2xl xl:leading-[120%] md:text-xl ">
                            г. Ставрополь,
                        </p>
                        <p
                            class="text-3xl text-right uppercase leading-[130%] sm:text-sm xl:text-2xl xl:leading-[120%] md:text-xl">
                            ул. Чапаева,
                            4/1</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</footer>
