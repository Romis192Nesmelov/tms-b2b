<a class="text-neutral-300 hover:text-yellow-400 focus:text-yellow-400"
   @if ($item instanceof \App\Models\Product)
        href="{{ route('catalogue', ['slug' => $item->slug]) }}"
   @elseif ($item instanceof \App\Models\News)
        href="{{ route('news', ['slug' => $item->slug]) }}"
   @else
        href="#"
   @endif
>
    <div class="rounded-xl h-{{ ($item instanceof \App\Models\Product || $item instanceof \App\Models\Image) ? '45' : '55' }} flex flex-col items-center justify-center overflow-hidden bg-linear-to-t from-white to-zinc-900 border-3 border-solid border-green-800 hover:border-yellow-400 focus:border-yellow-400">
        <img class="w-full" src="{{ asset((($item instanceof \App\Models\Product || $item instanceof \App\Models\Image) ? '/storage/images/catalogue/' : '/storage/images/news/').$item['image']) }}" />
    </div>
    @if ($item instanceof \App\Models\Product)
        <p class="w-full text-center uppercase text-sm font-semibold p-2">{{ $item->name }}</p>
    @elseif ($item instanceof \App\Models\News)
        <p class="w-full text-center text-gray-600 text-md font-semibold pt-3">{{ carbonDate($item->date) }}</p>
    @else
        <p class="w-full text-center uppercase text-xl font-semibold leading-5 p-2">{{ $item->title }}</p>
        <p class="w-full text-center text-xs leading-5">{{ $item->description }}</p>
    @endif
</a>
