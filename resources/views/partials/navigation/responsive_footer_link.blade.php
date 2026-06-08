<li class="focus:text-yellow-400 hover:text-yellow-400 {{ request()->routeIs($key) ? 'text-yellow-400' : 'text-white' }}"><a href="{{ route($key) }}">{{ $item }}</a></li>
