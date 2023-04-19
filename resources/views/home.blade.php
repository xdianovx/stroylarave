<x-layout title="Главная">
    <section class="hero h-screen mt-48">
        <div class="container">
            <h1 class="h1">
                <div>Мы строим</div>
                <div>счастливое</div>
                <div>будущее</div>
            </h1>
    </section>

    <section class="" data-cursor-text="Play">
        <img src="{{ asset('img/hero_video.jpg') }}" alt="">
    </section>

    <x-text-section class="mt-[356px]"
        title="Мы стремимся стать одним из крупнейших строительно-инвестиционных холдингов федерального и международного уровня."
        text="Все это время «Стройград» стремительно развивался, выходил на новые рынки, наращивал собственную производственную базу, осваивал новые направления бизнеса." />


    <x-project-slider class="mt-[356px]" />
</x-layout>
