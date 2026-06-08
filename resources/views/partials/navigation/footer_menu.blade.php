<ul class="list-none">
    @foreach($navs as $key => $item)
        @if (is_array($item))
            @foreach($item as $href => $name)
                @include('partials.navigation.responsive_footer_link', ['key' => $href, 'item' => $name])
            @endforeach
        @else
            @include('partials.navigation.responsive_footer_link')
        @endif
    @endforeach
</ul>
