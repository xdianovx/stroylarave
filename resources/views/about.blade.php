<x-layout title="О компании">
    <section class="hero  mt-48 xl:mt-32 lg:mt-24 md:mt-20 xs:mt-28">
        <div class="container">
            <h1 class="h1">
                <div>Компания</div>
                <div>Стройград</div>
            </h1>
    </section>

    <section class="mt-[356px] xl:mt-[220px] md:mt-40 sm:mt-16" data-cursor-text="Play">
        <img src="{{ asset('img/about/hero.jpg') }}" alt="">
    </section>

    <section class="mt-[356px] xl:mt-[220px] md:mt-40 sm:mt-16">
        <div class="container">
            <x-ui.text-lg
                text="Мы создаём сверхновое представление
            о комфорте и формируем во всех проектах мультиформатную среду,
            в центре которой — человек и его потребности." />
        </div>
    </section>

    <x-num-section class="mt-[356px] xl:mt-[220px] md:mt-40 sm:mt-16" />

    <x-head-slider-section class="mt-[356px] xl:mt-[220px] md:mt-40 sm:mt-16" />

    {{-- Блок с годами тут --}}

    <x-features-slider-section class="mt-[356px] xl:mt-[220px] md:mt-40 sm:mt-16" />

    {{-- Блок с картами тут --}}

    <x-partners-section class="mt-[356px] xl:mt-[220px] md:mt-40 sm:mt-16" />

</x-layout>
