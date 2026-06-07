<x-slot name="main_nav">@include('partials.navigation.navigation')</x-slot>
<x-slot name="header">@include('partials.breadcrumbs.breadcrumbs')</x-slot>
<x-slot name="footer_menu1">@include('partials.navigation.footer_menu', ['navs' => array_slice($nav_links,0,4)])</x-slot>
<x-slot name="footer_menu2">@include('partials.navigation.footer_menu', ['navs' => array_slice($nav_links,4)])</x-slot>
