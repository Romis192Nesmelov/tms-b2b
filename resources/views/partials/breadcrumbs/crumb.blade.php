<div class="flex items-center font-semibold text-xs md:text-base text-gray-400 leading-tight">
    <i class="mx-1 md:mx-3 text-gray-600 icon-circle-right2"></i>
    <a class="hover:text-gray-300 hover:border-b-2 hover:border-indigo-700 focus:outline-none transition duration-150 ease-in-out" href="{{ route($item['href'], (isset($item['slug']) ? ['slug' => $item['slug']] : [])) }}">{{ $item['name'] }}</a>
</div>
