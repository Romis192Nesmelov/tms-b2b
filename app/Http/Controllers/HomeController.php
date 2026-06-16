<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Slide;
use App\Models\Chapter;
use Illuminate\View\View;

class HomeController extends BaseController
{
    /**
     * Display home page.
     */
    public function __invoke(): View
    {
        return view('home', [
            'breadcrumbs' => [],
            'nav_links' => $this->mainMenu,
            'slides' => Slide::query()->where('active',1)->get(),
            'chapters' => Chapter::query()->where('active',1)->get(),
            'news' => News::query()->where('active',1)->orderByDesc('created_at')->limit(4)->get(),
            'contents' => '',
        ]);
    }
}
