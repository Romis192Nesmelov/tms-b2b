<div class="w-full flex justify-between">
    <div class="flex">
        @each('partials.breadcrumbs.crumb', array_merge([['href' => 'home', 'name' => __('Home')]], $breadcrumbs), 'item')
    </div>
</div>
