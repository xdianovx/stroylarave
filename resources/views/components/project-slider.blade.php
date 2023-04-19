<section class="{{ $class }}">
    <div class="container">
        <h1 class="h1">
            <div>Наши</div>
            <div>проекты</div>
        </h1>

        <div class="projects-slider__sort_top flex gap-28 mt-40">
            <div>
                <span>Укажите дату заселения:</span>
                <div class="flex gap-8 text-[32px]">
                    <div class="">Заселен:</div>
                    <div class="flex gap-8 text-gray font-light">
                        <div class="cursor-pointer">2023</div>
                        <div class="cursor-pointer">2024</div>
                        <div class="cursor-pointer">2025</div>
                    </div>
                </div>
            </div>

            <div>
                <span>Выберите город:</span>
                <div class="flex gap-8 text-[32px]">
                    <div class="flex gap-8 text-gray font-light">
                        <div class="cursor-pointer">Ставрополь</div>
                        <div class="cursor-pointer">Ростов-на-Дону</div>
                        <div class="cursor-pointer">Краснодар</div>
                        <div class="cursor-pointer">Сочи</div>
                    </div>
                </div>
            </div>
        </div>


        <div class="swiper project-slider-section mt-28">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="relative">
                        <img src="{{ asset('img/projects/1.jpg') }}" alt="">
                    </div>

                    <div class="mt-12 flex gap-28">
                        <h2 class="max-w-[420px] text-[56px] leading-[100%]">Императорское <br>поместье</h2>

                        <p class="mt-6">ЖК «Достояние» - воплощение современного подхода к проектированию жилья.
                            Благополучие,
                            безопасность, отличное расположение и развитая инфраструктура – все это находит отражение в
                            проекте.</p>

                        <x-ui.link-circle class="shrink-0" link="" text="от 3,3 млн. рублей" />
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
