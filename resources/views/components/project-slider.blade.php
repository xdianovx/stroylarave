<section class="{{ $class }}">
    <div class="container">
        <h1 class="h1">
            <div>Наши</div>
            <div>проекты</div>
        </h1>

        <div class="projects-slider__sort_top flex gap-28 mt-40 lg:flex-col lg:gap-10 lg:mt-20 md:gap-6 md:mt-10">
            <div>
                <span>Укажите дату заселения:</span>
                <div class="flex gap-8 text-[32px] mt-4 leading-none lg:mt-2 lg:text-[24px] md:text-[18px] ">
                    {{-- <div class="">Заселен:</div> --}}
                    <div class="flex gap-8 text-gray  font-light md:gap-4">
                        <div class="cursor-pointer">Заселен</div>
                        <div class="cursor-pointer">2023</div>
                        <div class="cursor-pointer">2024</div>
                        <div class="cursor-pointer">2025</div>
                    </div>
                </div>
            </div>

            <div>
                <span>Выберите город:</span>
                <div class="flex gap-8 text-[32px] mt-4  lg:mt-2 lg:text-[24px] md:text-[18px]">
                    <div class="flex flex-wrap gap-8 leading-none text-gray font-light md:gap-2">
                        <div class="cursor-pointer">Ставрополь</div>
                        <div class="cursor-pointer">Ростов-на-Дону</div>
                        <div class="cursor-pointer">Краснодар</div>
                        <div class="cursor-pointer">Сочи</div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="hidden border-1 my-10 md:block ">


        <div class="swiper project-slider-section mt-28 lg:mt-20 sm:mt-0 ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hidden mb-4 items-center grid-cols-2 md:grid">
                        <p class="text-2xl leading-none">Императорское поместье</p>
                        <a class="underline ml-auto" href="/">от 1,5 млн ₽</a>
                    </div>
                    <div class="relative">
                        <img src="{{ asset('img/projects/1.jpg') }}" alt="">
                    </div>

                    <div class="mt-12 flex gap-28 xl:gap-12 md:mt-5">
                        <h2 class="max-w-[420px] text-[56px] leading-[100%] lg:text-[32px] md:hidden">Императорское
                            <br>поместье
                        </h2>

                        <p class="mt-6 lg:mt-2 md:mt-1">ЖК «Достояние» - воплощение современного подхода к
                            проектированию жилья.
                            Благополучие,
                            безопасность, отличное расположение и развитая инфраструктура – все это находит отражение в
                            проекте.</p>

                        <x-ui.link-circle class="shrink-0 lg:self-end md:hidden " link=""
                            text="от 3,3 млн. рублей" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative">
                        <img src="{{ asset('img/projects/1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
