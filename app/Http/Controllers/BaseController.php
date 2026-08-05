<?php

namespace App\Http\Controllers;

class BaseController extends Controller
{
    protected array $mainMenu;

    public function __construct()
    {
        $this->mainMenu = [
            'home'     => __('Home'),
            'catalogue'     => __('Catalogue'),
//            'news'          => __('News')
        ];
    }
}
