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
        <div class="grid grid-cols-2">
            <x-ui.suptitle text="Преимущества" />
            <div class="">

                <x-ui.text-md class="" text="Стройград — социально ответственный девелопер" />
                <p class="max-w-[560px] mt-12 text-lg">Каждый наш проект — это место для новых начал, свершений. Для
                    уюта,
                    комфорта,
                    теплых слов и
                    плодотворной работы.</p>
            </div>
        </div>

        <div class="swiper features-slider mt-36">
            <div class="swiper-wrapper">
                @foreach ($data as $item)
                    <div class="swiper-slide  max-w-[1540px]">
                        <div class="w-full h-[700px]">
                            <img class="w-full h-full object-cover" src="{{ asset($item['img']) }}" alt="">
                        </div>

                        <div class="mt-12">
                            <p class="text-[90px] leading-none">{!! $item['title'] !!}</p>
                            <p>{!! $item['text'] !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</section>
