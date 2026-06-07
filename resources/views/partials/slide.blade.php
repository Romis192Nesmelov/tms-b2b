<div class="item w-full relative rounded-xl overflow-hidden border-2 border-gray-700">
    <img src="{{ asset('storage/'.$slide->image) }}" />
    @if ($slide->text)
        <div class="w-3/5 absolute bottom-0 right-0 p-3 text-white font-bold text-xs md:text-sm lg:text-base bg-gray-800 border-l-2 border-t-2 border-gray-700">{{ $slide->text }}</div>
    @endif
</div>
