<div class="w-full flex justify-between">
    <div class="flex">
        @each('partials.breadcrumbs.crumb', array_merge([['href' => 'home', 'name' => 'Главная']], $breadcrumbs), 'item')
    </div>
</div>
