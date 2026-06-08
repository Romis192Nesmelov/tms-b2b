<div class="w-full">
    <a class="text-neutral-300 hover:text-yellow-400 focus:text-yellow-400" href="#">
        <div class="rounded-xl overflow-hidden border-3 border-solid border-green-800 hover:border-yellow-400 focus:border-yellow-400">
            <img class="w-full" src="{{ asset($chapter->image) }}" />
        </div>
        <p class="w-full text-center uppercase font-semibold leading-5 p-2">{{ $chapter->title }}</p>
    </a>
</div>