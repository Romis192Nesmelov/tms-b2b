<x-app-layout>
    <script>window.productFields = [];</script>
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
        @if (count($product->activeArticles))
            <div class="big-table-container">
                <table class="articles-table min-w-full table-auto border border-gray-300">
                    <thead class="bg-gray-600">
                        <tr>
                            @foreach($productFields as $ka => $fieldName)
                                @include('partials.form.articles-table-head',['fieldName' => $fieldName, 'key' => $ka])
                                <script>window.productFields.push("{{ $fieldName }}");</script>
                            @endforeach
                            @include('partials.form.articles-table-head-basket')
                        </tr>
                    </thead>
                    @foreach($product->activeArticles as $ka => $article)
                        <tr class="article_{{ $article->id }}">
                            @foreach($productFields as $kf => $fieldName)
                                @include('partials.form.articles-table-cell',[
                                    'cellVal' => $article[$fieldName],
                                    'fieldName' => $fieldName,
                                    'key' => $kf
                                ])
                            @endforeach
                            <td class="text-center text-white p-2">
                                @include('partials.form.input-form',[
                                    'name' => 'article_'.$article->id,
                                    'class' => 'article w-20 text-center',
                                    'type' => 'number',
                                    'min' => 0,
                                    'max' => 100,
                                    'value' => array_key_exists($article->id, session('basket', [])) ? session('basket', [])[$article->id]['value'] : 0
                                ])
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        @endif
    </div>
</x-app-layout>
