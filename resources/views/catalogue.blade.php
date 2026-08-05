<x-app-layout>
    @include('partials.slots')

    <div class="max-w-7xl mx-auto py-6 px-3">
        @include('partials.head1',['head' => __('Catalogue')])
        <div class="grid grid-cols-2 lg:grid-cols-5 gap-3">
            @each('partials.boxes', $products, 'item')
        </div>
    </div>

</x-app-layout>
