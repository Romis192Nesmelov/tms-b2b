<x-app-layout>
    @include('partials.slots')

    <div class="max-w-7xl mx-auto py-6 px-3">
        @include('partials.head1',['head' => $product->name])
        <div class="flex flex-col md:flex-row items-start justify-start">
            <div class="w-full md:w-[40%]">
                <a id="product-main-image-href" class="fancybox" href="{{ asset('/storage/images/catalogue/'.$product->image) }}">
                    <div class="rounded-xl h-fit flex items-center justify-center overflow-hidden bg-linear-to-t from-white to-zinc-900 border-3 border-solid border-green-800 hover:border-yellow-400 focus:border-yellow-400">
                        <img id="product-main-image" class="w-full" src="{{ asset('/storage/images/catalogue/'.$product->image) }}" />
                    </div>
                </a>
                @if (count($product->images))
                    <div id="product-images" class="grid grid-cols-4 gap-2 mt-3">
                        @each('partials.boxes', $product->images, 'item')
                    </div>
                @endif
            </div>
            <div class="w-full md:w-[60%] pl-7 md:pl-15 text-left text-white">
                <h2 class="w-full text-left text-2xl text-neutral-600 font-semibold mt-4 md:mt-0 mb-4">{{ __('Properties and advantages') }}</h2>
                {!! $product->description !!}
            </div>
        </div>
    </div>

</x-app-layout>
