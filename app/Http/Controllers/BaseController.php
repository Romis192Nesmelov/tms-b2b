<?php

namespace App\Http\Controllers;

class BaseController extends Controller
{
    protected array $mainMenu;

    public function __construct()
    {
        $this->mainMenu = [
            'about'         => __('About company'),
            'production'    => __('Contract production'),
            'delivery'      => __('Delivery and payment'),
			'catalogue'     => __('Каталог')
        ];
    }
}
