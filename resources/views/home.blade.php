<x-app-layout>
    @include('partials.slots')

    <div class="min-h-screen max-w-7xl mx-auto py-6">
        @if ($slides->count())
            <div class="owl-carousel slider mb-8 pb-8">
                @each('partials.slide', $slides, 'slide')
            </div>
        @endif

        @include('partials.head1',['head' => 'О компании'])
        <div class="flex flex-col md:flex-row items-start justify-center p-4">
            <img class="w-full md:w-90 mr-6" src="{{ asset('storage/images/promo.jpg') }}" />
            <p class="text-neutral-300">Curabitur vitae dui pellentesque, ullamcorper ipsum quis, tempor orci. Proin id sem consequat, convallis mauris nec, viverra tellus. Mauris quis sapien sit amet metus dictum euismod. Morbi vel eros elit. Maecenas efficitur mauris eget mauris lacinia volutpat. Curabitur scelerisque, sem sit amet elementum mattis, nulla ligula posuere felis, non sollicitudin risus tellus vitae dolor. Integer vel accumsan elit. Donec posuere orci sit amet orci cursus vulputate. Ut at lacus sit amet libero vulputate consequat. Mauris mollis, ex nec consectetur ullamcorper, ante mauris ullamcorper sem, sed sagittis sapien nibh a lectus. Ut velit lectus, eleifend vitae ultricies id, congue sit amet neque. Curabitur vitae dui pellentesque, ullamcorper ipsum quis, tempor orci. Proin id sem consequat, convallis mauris nec, viverra tellus. Mauris quis sapien sit amet metus dictum euismod. Morbi vel eros elit. Maecenas efficitur mauris eget mauris lacinia volutpat. Curabitur scelerisque, sem sit amet elementum mattis, nulla ligula posuere felis, non sollicitudin risus tellus vitae dolor. Integer vel accumsan elit. Donec posuere orci sit amet orci cursus vulputate. Ut at lacus sit amet libero vulputate consequat. Mauris mollis, ex nec consectetur ullamcorper, ante mauris ullamcorper sem, sed sagittis sapien nibh a lectus. Ut velit lectus, eleifend vitae ultricies id, congue sit amet neque.</p>
        </div>
    </div>

    <x-gray-part>
        @include('partials.head1',['head' => 'Преимущества работы с ТМС'])
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3">
            @each('partials.advantages-icon', [
                ['img' => 'icon1', 'text' => 'Собственное производство'],
                ['img' => 'icon2', 'text' => 'Полное стоковое наличие'],
                ['img' => 'icon3', 'text' => 'Комплексный расчет Вашего проекта'],
                ['img' => 'icon4', 'text' => '5 лет работы на рынке'],
                ['img' => 'icon5', 'text' => 'Наличие необходимой сертификации'],
                ['img' => 'icon6', 'text' => 'Поставка за один день'],
            ], 'icon')
        </div>
    </x-gray-part>

    <div class="max-w-7xl mx-auto py-6 px-3">
        @include('partials.head1',['head' => 'Каталог'])
        <div class="grid grid-cols-2 lg:grid-cols-6 gap-3">
            @each('partials.chapter', $chapters, 'chapter')
        </div>

        <x-hor-line></x-hor-line>

        <div class="w-full text-center">
            <x-primary-button class="w-90">Оставить заявку</x-primary-button>
            <p class="text-neutral-300 text-center my-6">Curabitur vitae dui pellentesque, ullamcorper ipsum quis, tempor orci. Proin id sem consequat, convallis mauris nec, viverra tellus. Mauris quis sapien sit amet metus dictum euismod. Morbi vel eros elit. Maecenas efficitur mauris eget mauris lacinia volutpat. Curabitur scelerisque, sem sit amet elementum mattis, nulla ligula posuere felis, non sollicitudin risus tellus vitae dolor. Integer vel accumsan elit. Donec posuere orci sit amet orci cursus vulputate.</p>
        </div>
    </div>

</x-app-layout>
