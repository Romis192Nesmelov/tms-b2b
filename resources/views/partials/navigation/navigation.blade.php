<nav x-data="{ open: false }" class="bg-gray-900 border-b border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-2 sm:px-0">
        <div class="flex justify-between h-16">
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
                    @foreach($nav_links as $key => $item)
                        @if (is_array($item))
                            @php $dropMenuCount++; @endphp
                            <div class="hidden sm:flex sm:items-center sm:ms-6">
                                <x-dropdown align="right">
                                    <x-slot name="trigger">
                                        <a id="drop-button-{{ $dropMenuCount }}" x-on:click="$('#drop{{ $dropMenuCount }}').toggleClass('icon-arrow-down12 icon-arrow-up12')" class="cursor-pointer inline-flex items-center px-1 pt-1 border-b-2 hover:border-indigo-700 text-xs lg:text-sm font-medium leading-5 focus:outline-none transition duration-150 ease-in-out border-transparent text-gray-400 focus:border-gray-700 hover:text-gray-300 focus:text-gray-300">{{ $key }}<i id="drop{{ $dropMenuCount }}" class="icon-arrow-down12 ml-1"></i></a>
                                    </x-slot>

                                    <x-slot name="content">
                                        @foreach($item as $href => $name)
                                            <x-dropdown-link :href="route($href)" class="{{ request()->routeIs($href) ? 'bg-gray-800' : '' }}">{{ $name }}</x-dropdown-link>
                                            @if (request()->routeIs($href))
                                                <script>
                                                    $('#drop-button-{{ $dropMenuCount }}').addClass('border-indigo-600  text-gray-100').removeClass('border-transparent');
                                                </script>
                                            @endif
                                        @endforeach
                                    </x-slot>
                                </x-dropdown>
                            </div>
                        @else
                            <a href="{{ route($key) }}" class="inline-flex items-center px-1 pt-1 border-b-2 hover:border-indigo-700 text-xs lg:text-sm font-medium leading-5 focus:outline-none transition duration-150 ease-in-out {{ request()->routeIs($key) ? 'border-indigo-600  text-gray-100' : 'border-transparent text-gray-400 focus:border-gray-700 hover:text-gray-300 focus:text-gray-300' }}">{{ $item }}</a>
                        @endif
                    @endforeach
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-gray-400 hover:bg-gray-900 focus:outline-none focus:bg-gray-900 focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            @foreach($nav_links as $key => $item)
                @if (is_array($item))
                    @foreach($item as $href => $name)
                        @include('partials.navigation.responsive_nav_link', ['key' => $href, 'item' => $name])
                    @endforeach
                @else
                    @include('partials.navigation.responsive_nav_link')
                @endif

            @endforeach
        </div>
    </div>
</nav>
