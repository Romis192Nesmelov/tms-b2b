<div class="flex items-center font-semibold text-xs md:text-base text-neutral-400 leading-tight">
    <span class="mx-1 md:mx-3">►</span>
    <a class="hover:text-yellow-400 focus:text-yellow-400" href="{{ route($item['href'], (isset($item['slug']) ? ['slug' => $item['slug']] : [])) }}">{{ $item['name'] }}</a>
</div>
