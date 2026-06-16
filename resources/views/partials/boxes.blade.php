<div class="w-full">
    <a class="text-neutral-300 hover:text-yellow-400 focus:text-yellow-400" href="#">
        <div class="rounded-xl h-{{ $item instanceof \App\Models\Chapter ? '45' : '55' }} flex flex-col items-center justify-center overflow-hidden border-3 border-solid border-green-800 hover:border-yellow-400 focus:border-yellow-400">
            <img class="w-full" src="{{ asset($item['image']) }}" />
        </div>
        <p class="w-full text-center uppercase text-xl font-semibold leading-5 p-2">{{ $item['title'] }}</p>
        @if (isset($item['description']))
            <p class="w-full text-center text-sm leading-5">{{ $item['description'] }}</p>
        @endif
    </a>
</div>