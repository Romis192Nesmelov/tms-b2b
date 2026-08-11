<x-app-layout>
    @include('partials.slots')

    <x-gray-part>
        @include('partials.head1',['head' => $head])
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-15">
            @each('partials.boxes', $news, 'item')
        </div>
        <div class="pagination w-full text-center mt-6">
            {{ $news->links() }}
        </div>
    </x-gray-part>
</x-app-layout>
