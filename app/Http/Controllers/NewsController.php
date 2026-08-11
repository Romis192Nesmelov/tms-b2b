<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\View\View;

class NewsController extends BaseController
{
    /**
     * Display home page.
     */
    public function __invoke($slug=null): View
    {
        $breadcrumbs = [['href' => 'news', 'name' => __('News')]];
        if ($slug) {
            if (preg_match('/^(202(\d))$/', $slug)) {
                $breadcrumbs[] = ['href' => 'news', 'slug' => $slug, 'name' => __('Year').' '.$slug];
                return view('news', [
                    'breadcrumbs' => $breadcrumbs,
                    'head' => trans('content.news_by',['year' => $slug]),
                    'nav_links' => $this->mainMenu,
                    'news' => News::query()
                        ->whereBetween('date',[$slug.'-01-01',$slug.'-12-31'])
                        ->where('active',1)
                        ->orderBy('date','desc')
                        ->paginate(16),
                ]);
            } elseif ($new = News::query()
                ->where('slug',$slug)
                ->where('active',1)
                ->first()
            ) {
                $breadcrumbs[] = ['href' => 'news', 'slug' => $new->slug, 'name' => $new->title];
                return view('new', [
                    'breadcrumbs' => $breadcrumbs,
                    'nav_links' => $this->mainMenu,
                    'new' => $new
                ]);
            } else abort(404);
        } else {
            return view('news', [
                'breadcrumbs' => $breadcrumbs,
                'head' => __('News'),
                'nav_links' => $this->mainMenu,
                'news' => News::query()
                    ->where('active',1)
                    ->orderBy('date','desc')
                    ->paginate(16),
            ]);
        }
    }
}
