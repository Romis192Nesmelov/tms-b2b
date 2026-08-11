<nav class="border-b border-yellow-400">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-2 sm:px-0">
        <div class="flex justify-between h-10">
            <div class="w-full flex justify-center">
                <!-- Logo -->
{{--                <div class="flex md:flex sm:hidden items-center mr-1 lg:mr-3 shrink-0">--}}
{{--                    <a class="hover:opacity-50" href="{{ route('home') }}">--}}
{{--                        <img width="100" src="{{ asset('storage/images/logo_shl.svg') }}" alt="Стальная лига" />--}}
{{--                    </a>--}}
{{--                </div>--}}

                <!-- Navigation Links -->
                <div class="h-full hidden space-x-1 lg:space-x-3 sm:-my-px sm:ms-3 sm:flex">
                    @php $dropMenuCount = 0; @endphp
                    @foreach($nav_links as $item)
                        <div class="px-3 pt-2 inline-flex {{ isset($item['sub_menu']) && count($item['sub_menu']) ? 'with-sub-menu' : '' }}">
                            <a href="{{ route($item['route']) }}" class="hover:text-yellow-400 focus:text-yellow-400 font-medium {{ request()->routeIs($item['route']) ? 'text-yellow-400' : 'text-neutral-100' }}">{{ $item['name'] }}</a>
                            @if (isset($item['sub_menu']) && count($item['sub_menu']))
                                <ul class="hidden absolute mt-6 p-4 rounded-sm bg-green-900 text-white border-1 border-yellow-400 z-999">
                                    @foreach($item['sub_menu'] as $subMenu)
                                        <li class="list-none">
                                            <a href="{{ route($item['route'], ['slug' => $subMenu['slug']]) }}" class="inline-flex items-left pt-1 hover:text-yellow-400 focus:text-yellow-400 font-medium {{ request()->routeIs($item['route']) && request()->slug == $subMenu['slug'] ? 'text-yellow-400' : 'text-neutral-100' }}">{!! strBreak($subMenu['name']) !!}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button id="hamburger" class="inline-flex items-center justify-center p-2 rounded-md text-neutral-500 hover:text-neutral-400 focus:outline-none focus:bg-neutral-900 focus:text-neutral-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div id="responsive-nav" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            @foreach($nav_links as $key => $item)
                <a href="{{ route($item['route']) }}" class="block w-full ps-3 pe-4 py-2 border-l-4 text-start text-base font-medium transition duration-150 ease-in-out focus:outline-none {{ request()->routeIs($item['route']) ? 'text-indigo-300 focus:text-indigo-200 bg-indigo-900/50 focus:bg-indigo-900 focus:border-indigo-300' : 'text-gray-400 focus:text-gray-200 focus:bg-gray-700 border-l-4 focus:border-gray-600 border-transparent hover:text-gray-200 hover:bg-gray-700 hover:border-gray-600' }}">{{ $item['name'] }}</a>
            @endforeach
        </div>
    </div>
</nav>
