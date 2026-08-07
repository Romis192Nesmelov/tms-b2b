<ul class="list-none">
    @foreach($navs as $item)
        <li class="focus:text-yellow-400 hover:text-yellow-400 {{ request()->routeIs($item['route']) ? 'text-yellow-400' : 'text-white' }}"><a href="{{ route($item['route']) }}">{{ $item['name'] }}</a></li>
    @endforeach
</ul>
