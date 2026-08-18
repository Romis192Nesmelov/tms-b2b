<x-app-layout>
    @include('partials.slots')

    <div class="min-h-screen max-w-7xl mx-auto py-6 overflow-hidden">
        @if ($slides->count())
            <div class="owl-carousel slider mb-8 pb-8">
                @each('partials.slide', $slides, 'slide')
            </div>
        @endif

        @include('partials.head1',['head' => $content->title])
        <div class="flex flex-col md:flex-row items-start justify-center p-4">
            <img class="w-full md:w-75 mr-6" src="{{ asset('storage/images/content/'.$content->image) }}" />
            <div class="text-neutral-300">
                {!! $content->text !!}
            </div>
        </div>
{{--        <div class="w-full my-4 text-center">--}}
{{--            <x-secondary-button class="w-50 text-center">{{ __('Details') }}</x-secondary-button>--}}
{{--        </div>--}}
    </div>

    <x-gray-part>
        @include('partials.head1',['head' => trans('content.advantages_head')])
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3">
            @each('partials.advantages-icon', $advantages, 'icon')
        </div>
    </x-gray-part>

    <div class="max-w-7xl mx-auto py-6 px-3">
        @include('partials.head1',['head' => __('Catalogue')])
        <div class="grid grid-cols-2 lg:grid-cols-5 gap-3">
            @each('partials.boxes', $products, 'item')
        </div>
    </div>

{{--    <x-gray-part>--}}
{{--        @include('partials.head1',['head' => __('News')])--}}
{{--        <div class="owl-carousel news mb-3">--}}
{{--            @each('partials.boxes', $news, 'item')--}}
{{--        </div>--}}
{{--        <div class="max-w-7xl mx-auto text-center">--}}
{{--            <a href="{{ route('news') }}">--}}
{{--                <x-secondary-button class="w-50 my-4 text-center">{{ __('All news') }}</x-secondary-button>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </x-gray-part>--}}

    <div class="max-w-7xl mx-auto py-6 px-3">
        <div class="w-full rounded-xl overflow-hidden border-3 border-solid border-green-800">
            <video id="main-video" autoplay="autoplay" preload="auto" muted="muted" loop="loop" controls poster="{{ asset('storage/video/poster.jpg') }}">
                <source src="{{ asset('storage/video/video.mp4') }}">
            </video>
        </div>
    </div>

    <x-gray-part>
        @include('partials.head1',['head' => __('Submit a production request')])
        <div class="w-full text-center">
            <x-secondary-button command="show-modal" commandfor="send-message">{{ __('Let submit your application') }}</x-secondary-button>
            <p class="text-neutral-300 text-center my-6">©2021-{{ date('Y') }} | {{ trans('content.footline') }}</p>
        </div>
    </x-gray-part>

    <x-modal id="send-message">
        <form method="POST" action="{{ route('api.message') }}">
            @csrf
            <div class="px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <h2 class="text-xl font-semibold text-white mb-5">{{ __('Submit a production request') }}</h2>
                @include('partials.form.user-fields-block')
            </div>
            @include('partials.modal-buttons-pair',[
                'modalId' => 'send-message',
                'submitText' => __('Submit an application')
            ])
        </form>
    </x-modal>

</x-app-layout>
