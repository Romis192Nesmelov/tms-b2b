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
            <img class="w-full md:w-75 mr-6" src="{{ asset('storage/images/promo.jpg') }}" />
            <div class="text-neutral-300">
                <p><b>Собственное производство.</b> ТМС является российским производителем основного перечня крепёжных систем и опор на кровлю полного цикла: от изготовления заготовок в заводских условиях до сварочных работ и цинкования по стандартам ГОСТ.</p>
                <p><b>Сертификация и документация.</b> ТМС предоставляет всю необходимую на строительном объекте сопроводительную документацию: от сертификатов соответствия ГОСТ и протоколов испытаний до спецификаций и сборочных чертежей.</p>
                <p><b>Широкий ассортимент.</b> Ассортимент компании ТМС позволяет собрать конструкции для крепления и безопасной эксплуатации инженерных систем любой сложности.</p>
                <p><b>Сопровождение объекта.</b> Компания ТМС готова предоставить комплексную поддержку: технические консультации, индивидуальный подход, помощь в проектировании и выезд штатного инженера на строящийся объект в рамках шеф-монтажа.</p>
                <p><b>ТМС «Монтажные Системы»</b> – надёжный и гибкий поставщик кровельных опор и крепёжных систем.</p>
            </div>
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
            @each('partials.boxes', $chapters, 'item')
        </div>
    </div>

    <x-gray-part>
        @include('partials.head1',['head' => 'Новости'])
        <div id="home-news" class="grid grid-cols-2 lg:grid-cols-4 gap-3">
            @each('partials.boxes', $news, 'item')
        </div>
        <div class="max-w-7xl mx-auto pt-6 text-center">
            <x-secondary-button class="w-50 text-center">Все новости</x-secondary-button>
        </div>
    </x-gray-part>

    <div class="max-w-7xl mx-auto py-6 px-3">
        <x-hor-line></x-hor-line>
        <div class="w-full text-center">
            <x-primary-button class="w-90">Оставить заявку</x-primary-button>
            <p class="text-neutral-300 text-center my-6">© 2021- 2026  | Монтажные Системы | ТМС. Производитель и поставщик крепёжных систем. Все права защищены.</p>
        </div>
    </div>

</x-app-layout>
