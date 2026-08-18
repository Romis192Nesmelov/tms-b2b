<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'STRUT profile.ru') }}</title>

    @include('partials.favicons')

    <!-- Fonts -->
{{--    <link rel="preconnect" href="https://fonts.bunny.net">--}}
{{--    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"/>--}}
{{--    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.5/css/dataTables.dataTables.css"/>--}}

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/jquery.mcustomscrollbar/3.1.5/jquery.mCustomScrollbar.min.js"></script>
{{--    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js" type="text/javascript"></script>--}}
{{--    <script src="https://cdn.datatables.net/2.3.5/js/dataTables.js" type="text/javascript"></script>--}}

    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
    {{--        <script src="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/js/pagedone.js"></script>--}}
    {{--        <link href="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/css/pagedone.css " rel="stylesheet"/>--}}
    @vite([
        'resources/css/app.css',
        'resources/css/owl.carousel.min.css',
        'resources/css/jquery.fancybox.min.css',
        'resources/css/jquery.mCustomScrollbar.css',
        'resources/css/main.css',
        'resources/js/owl.carousel.js',
        'resources/js/jquery.fancybox.min.js',
        'resources/js/jquery.easing.js',
        'resources/js/main.js'
    ])
</head>
<body class="font-sans antialiased bg-neutral-950">
@csrf

<div class="bg-green" data-scroll="top">
    <div class="max-w-7xl mx-auto py-5">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="flex flex-col md:flex-row items-start justify-start">
                <a class="hover:opacity-50" href="{{ route('home') }}">
                    <img class="w-50 ml-0 mr-0 md:ml-4 md:mr-2 mt-3 md:mt-0" src="{{ asset('storage/images/logo.svg') }}"/>
                </a>
                <p class="text-center md:text-left text-2xl leading-6 text-white font-semibold px-2 pt-3 md:pt-0">{{ trans('content.production_of') }}<br>{{ trans('content.the_mounting') }}<br>{{ trans('content.profile') }}</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-0 md:gap-4 px-6 py-5 md:py-0">
                @include('partials.contacts.contacts')
            </div>
            <div class="px-2">
                <form>
                    <x-text-input id="search" icon="search_icon.svg" placeholder="{{ __('Search') }}"></x-text-input>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="bg-green-middle">
    {{ $main_nav }}
    <!-- Page Heading -->
    <header class="bg-neutral-800 shadow border-b border-neutral-600">
        <div class="max-w-7xl mx-auto py-2 px-4 lg:px-2">
            {{ $breadcrumbs }}
        </div>
    </header>
    <!-- /Page Heading -->
</div>
<!-- Page Content -->
<main>
    {{ $slot }}
</main>
<!-- /Page Content -->

<footer class="py-8 bg-neutral-800 border-t border-neutral-600">
    <div class="max-w-7xl mx-auto text-white flex flex-col md:flex-row items-center justify-between">
        <div>{{ $footer_menu }}</div>
        <div class="grid grid-cols-1 gap-3">
            @include('partials.contacts.contacts')
        </div>
        <div class="text-center pt-2">
            <img class="w-30 mx-auto" src="{{ asset('storage/images/qrcode.svg') }}" />
            <a class="text-white pt-2 hover:text-yellow-400" href="https://titan-ms.ru/" target="_blank">https://titan-ms.ru/</a>
        </div>
    </div>
</footer>

<img id="on_top_button" class="hover:opacity-50" src="{{ asset('storage/images/ontop_icon.svg') }}" />

<x-modal id="success-message">
    <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="sm:flex sm:items-start">
            <div class="mx-auto flex size-50 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:size-10">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-10 text-red-400">
                    <path d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h2 class="text-xl font-semibold text-white mb-5"></h2>
            </div>
        </div>
    </div>
    <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
        <button type="button" command="close" commandfor="success-message" class="mt-3 inline-flex w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20 sm:mt-0 sm:w-auto">{{ __('Close') }}</button>
    </div>
</x-modal>

<x-modal id="basket-modal">
    <form method="POST" action="{{ route('api.make-an-order') }}">
        @csrf
        <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <h1 class="w-full text-center text-2xl font-semibold text-white mb-5">{{ __('Your basket') }}</h1>
            <div class="{{ !count(session('basket', [])) ? 'hidden' : '' }} big-table-container">
                <table class="order-table w-full table-auto border border-gray-300">
                    <thead class="bg-gray-600">
                        <tr>
                            @foreach(['article','name'] as $ka => $fieldName)
                                @include('partials.form.articles-table-head',['fieldName' => $fieldName, 'key' => $ka])
                            @endforeach
                            @include('partials.form.articles-table-head-basket')
                        </tr>
                    </thead>
                    @foreach(session('basket', []) as $id => $article)
                        <tr class="article_{{ $id }}">
                            @foreach(['article','name'] as $kf => $fieldName)
                                @include('partials.form.articles-table-cell',[
                                    'cellVal' => $article[$fieldName],
                                    'fieldName' => $fieldName,
                                    'key' => $kf
                                ])
                            @endforeach
                            <td class="text-center text-white p-2">
                                @include('partials.form.input-form',[
                                    'name' => 'article_'.$id,
                                    'class' => 'article w-20 text-center',
                                    'type' => 'number',
                                    'min' => 0,
                                    'max' => 100,
                                    'value' => $article['value']
                                ])
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            @include('partials.form.user-fields-block', ['class' => !count(session('basket', [])) ? 'hidden' : ''])

            <h2 class="{{ count(session('basket', [])) ? 'hidden' : '' }} w-full text-center text-xl font-semibold text-gray-700 mt-5">{{ __('Your basket is empty') }}</h2>
        </div>
        @include('partials.modal-buttons-pair',[
            'submitClass' => !count(session('basket', [])) ? 'hidden' : '',
            'modalId' => 'basket-modal',
            'submitText' => __('Submit an application')
        ])
    </form>
</x-modal>

</body>
</html>
