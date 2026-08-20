<x-app-layout>
    @include('partials.slots')

    <div id="middle-part" class="max-w-7xl mx-auto py-6 px-3">
        @include('partials.head1',['head' => __('Found by request:').' «'.request('search').'»'])

        @foreach($found as $item)
            <div class="flex flex-row items-start justify-start">
                <div class="w-[40%] md:w-[10%]">
                    <a class="fancybox" href="{{ asset('/storage/images/catalogue/'.$item['image']) }}">
                        <div class="rounded-xl h-fit flex items-center justify-center overflow-hidden bg-linear-to-t from-white to-zinc-900 border-3 border-solid border-green-800 hover:border-yellow-400 focus:border-yellow-400">
                            <img id="product-main-image" class="w-full" src="{{ asset('/storage/images/catalogue/'.$item['image']) }}" />
                        </div>
                    </a>
                </div>
                <div class="w-[60%] md:w-[90%] pl-7 text-left text-white">
                    <h4 class="w-full text-left text-md md:text-2xl leading-tight text-neutral-600 font-semibold mb-2">{!! $item['head'] !!}</h4>
                    <p class="mb-1">{!! $item['description'] !!}</p>
                    <p><a class="link" href="{{ $item['link'] }}">{{ __('Go over').' »' }}</a></p>
                </div>
            </div>
        @endforeach

        <div class="pagination w-full text-center mt-6">
            {{ $found->withQueryString()->links() }}
        </div>
    </div>
</x-app-layout>
