@php
    $data = [['img' => 'img/partners/1.jpg'], ['img' => 'img/partners/2.jpg'], ['img' => 'img/partners/3.jpg'], ['img' => 'img/partners/4.jpg'], ['img' => 'img/partners/5.jpg'], ['img' => 'img/partners/6.jpg']];
@endphp
<section class="{{ $class }}">
    <div class="container">
        <div class="grid-2">
            <div>
                <x-ui.suptitle class="" text="Группа компаний" />
            </div>
            <div>
                <x-ui.text-md class="sm:mt-12"
                    text="В состав группы входят не только строительные предприятия, но и компании занимающиеся экспертизой промышленной безопасности." />
                <p class="mt-16 md:mt-8">Каждое из направление усиливает уровень <br> сервиса в целом всей компании</p>

                <div class="grid grid-cols-2 mt-48 justify-between gap-20 md:mt-14 sm:gap-10">
                    @foreach ($data as $item)
                        <div>
                            <img src="{{ asset($item['img']) }}" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
