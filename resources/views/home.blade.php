<x-app-layout>
    @include('partials.slots')

    <div class="max-w-7xl mx-auto pt-6">
        @if ($slides->count())
            <div class="owl-carousel slider mb-8 pb-8">
                @each('partials.slide', $slides, 'slide')
            </div>
        @endif

{{--        @include('partials.head1',['head' => 'Новости'])--}}
{{--        <div class="pb-8">--}}
{{--            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 px-6">--}}
{{--                @each('news.partials.news', $news, 'new')--}}
{{--            </div>--}}
{{--            <div class="w-full text-center pt-6">--}}
{{--                <a href="{{ route('news') }}">--}}
{{--                    <x-primary-button>Все новости</x-primary-button>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</x-app-layout>
