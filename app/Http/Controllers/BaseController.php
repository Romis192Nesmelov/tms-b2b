<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Product;
use Carbon\Carbon;

class BaseController extends Controller
{
    protected array $mainMenu;

    public function __construct()
    {
//        $dates = News::query()->where('active',1)->select('date')->get();
//        $existingYears = [];
//        $years = [];
//        foreach ($dates as $item) {
//            $year = Carbon::parse($item->date)->format('Y');
//            if (!in_array($year,$existingYears)) {
//                $years[] = ['name' => __('Year').' '.$year, 'slug' => $year];
//                $existingYears[] = $year;
//            }
//        }

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
//            [
//                'route' => 'news',
//                'name' => __('News'),
//                'sub_menu' => $years
//            ],
        ];
    }
}
