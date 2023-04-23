@php
    $data = [
        //
        ['img' => 'img/features_slider/1.jpg', 'title' => '180 000 м2', 'text' => 'школ и детских садов к 2023 году '],
        ['img' => 'img/features_slider/2.jpg', 'title' => '12 415', 'text' => 'школ и детских садов к 2023 году '],
        ['img' => 'img/features_slider/1.jpg', 'title' => '180 000 м2', 'text' => 'школ и детских садов к 2023 году '],
        ['img' => 'img/features_slider/2.jpg', 'title' => '112 415', 'text' => 'школ и детских садов к 2023 году '],
    ];
@endphp

<section class="{{ $class }}">
    <div class="container">
        <div class="grid grid-cols-2 sm:grid-cols-1">
            <x-ui.suptitle text="Преимущества" />
            <div class="sm:mt-10">

                <x-ui.text-md class="sm:text-[30px]" text="Стройград — социально ответственный девелопер" />
                <p class="max-w-[560px] mt-12 text-lg xl:mt-5 sm:text-sm">Каждый наш проект — это место для новых начал,
                    свершений.
                    Для уюта, комфорта, теплых слов и работы.</p>
            </div>
        </div>

        <div class="swiper features-slider mt-36 xl:mt-24 sm:mt-10">
            <div class="hidden sm:flex sm:items-center sm:justify-between">
                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" class="block ml-auto">
                    <path
                        d="M0 5.70703C0.947368 5.70703 10.3947 5.70703 15 5.70703M15 5.70703L10.2632 0.707031M15 5.70703L10.2632 10.707"
                        stroke="#1F1F1F" />
                </svg>
            </div>
            <div class="swiper-wrapper sm:mt-5">
                @foreach ($data as $item)
                    <div class="swiper-slide  max-w-[1540px] xl:max-w-[1080px]">
                        <div class="w-full h-[700px] xl:h-[480px]">
                            <img class="w-full h-full object-cover" src="{{ asset($item['img']) }}" alt="">
                        </div>

                        <div class="mt-12 xl:mt-8 sm:mt-4 sm:flex sm:items-end sm:gap-4">
                            <p class="text-[90px] leading-none xl:text-[64px] sm:text-[40px]">{!! $item['title'] !!}
                            </p>
                            <p class="mt-2">{!! $item['text'] !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</section>
