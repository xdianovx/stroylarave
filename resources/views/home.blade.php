<x-layout title="Главная">
    <section class="hero  mt-48 xl:mt-32 lg:mt-24 md:mt-20 xs:mt-28">
        <div class="container">
            <h1 class="h1">
                <div>Мы строим</div>
                <div>счастливое</div>
                <div>будущее</div>
            </h1>
    </section>

    <section class="mt-[356px] xl:mt-[220px] md:mt-40 sm:mt-16" data-cursor-text="Play">
        <img src="{{ asset('img/hero_video.jpg') }}" alt="">
    </section>

    <x-text-section class="mt-[356px] xl:mt-[220px] md:mt-40 sm:mt-16"
        title="Мы стремимся стать одним из крупнейших строительно-инвестиционных холдингов федерального и международного уровня."
        text="Все это время «Стройград» стремительно развивался, выходил на новые рынки, наращивал собственную производственную базу, осваивал новые направления бизнеса." />


    <x-project-slider class="mt-[356px] xl:mt-[220px] md:mt-40 sm:mt-16" />

    <x-text-section-md class="mt-[356px] xl:mt-0" title="Комплексные решения"
        text="Мы создаем все условия, чтобы наши клиенты получали лучшие предложения на рынке. Вам остается выбрать квартиру и подготовить документы." />

    <x-offers-section class="mt-[356px] xl:mt-0" />

    <x-text-section class="mt-[356px] xl:mt-[220px] md:mt-40 sm:mt-16"
        title="Мы стремимся стать одним из крупнейших строительно-инвестиционных холдингов федерального и международного уровня."
        text="Все это время «Стройград» стремительно развивался, выходил на новые рынки, наращивал собственную производственную базу, осваивал новые направления бизнеса." />


    <x-num-section class="mt-[356px] xl:mt-[220px] md:mt-40 sm:mt-16" />


    <x-life-scroll-section class="mt-[356px]" />


    <x-callback-form />
</x-layout>
