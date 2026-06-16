<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ТМС b2b') }}</title>

    @include('partials.favicons')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.5/css/dataTables.dataTables.css"/>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/2.3.5/js/dataTables.js" type="text/javascript"></script>

    {{--        <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>--}}
    {{--        <script src="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/js/pagedone.js"></script>--}}
    {{--        <link href="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/css/pagedone.css " rel="stylesheet"/>--}}
    @vite([
        'resources/css/app.css',
        'resources/css/owl.carousel.min.css',
        'resources/css/jquery.fancybox.min.css',
        'resources/css/main.css',
        'resources/js/owl.carousel.js',
        'resources/js/jquery.fancybox.min.js',
        'resources/js/main.js'
    ])
</head>
<body class="font-sans antialiased bg-neutral-950">
<div class="bg-green">
    <div class="max-w-7xl mx-auto py-5">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="flex flex-col md:flex-row items-center justify-center">
                <a class="hover:opacity-50" href="{{ route('home') }}">
                    <img class="w-25 ml-0 mr-0 md:ml-4 md:mr-3 mt-3 md:mt-0" src="{{ asset('storage/images/logo.svg') }}"/>
                </a>
                <p class="text-center md:text-left text-2xl leading-6 text-white font-semibold px-2 pt-3 md:pt-0">производство<br>монтажного профиля</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-0 md:gap-6 px-6 py-5 md:py-0">
                @include('partials.contacts.contacts')
            </div>
            <div class="px-2">
                <form>
                    <x-text-input icon="search_icon.svg" placeholder="Поиск"></x-text-input>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="bg-green-middle">
    {{ $main_nav }}
    <!-- Page Heading -->
    <header class="bg-neutral-800 shadow border-b border-neutral-600">
        <div class="max-w-7xl mx-auto py-2 px-4 sm:px-6 lg:px-8">
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

{{--        <x-modal name="our-mission" focusable>--}}
{{--        </x-modal>--}}
</body>
</html>
