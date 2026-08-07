<?php

namespace App\Http\Controllers;

use App\Models\Product;

class BaseController extends Controller
{
    protected array $mainMenu;

    public function __construct()
    {
        $this->mainMenu = [
            [
                'route' => 'home',
                'name' => __('Home')
            ],
            [
                'route' => 'catalogue',
                'name' => __('Catalogue'),
                'sub_menu' => Product::query()
                    ->where('active',1)
                    ->select(['name','slug'])
                    ->get()
            ],
//            'news'      => __('News')
        ];
    }
}
