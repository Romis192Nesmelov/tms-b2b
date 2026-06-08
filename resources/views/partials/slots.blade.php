<x-slot name="main_nav">@include('partials.navigation.navigation')</x-slot>
<x-slot name="breadcrumbs">@include('partials.breadcrumbs.breadcrumbs')</x-slot>
<x-slot name="footer_menu">@include('partials.navigation.footer_menu', ['navs' => $nav_links])</x-slot>
