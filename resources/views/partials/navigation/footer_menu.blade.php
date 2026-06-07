<ul class="mb-3 md:mb-0 ml-4 mr-0 lg:mr-20 md:mr-5 list-none">
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
