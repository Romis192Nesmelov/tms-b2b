<?php

namespace App\Http\Controllers;
use App\Http\Requests\SearchRequest;
use App\Models\Product;
use App\Models\Article;
use Illuminate\View\View;

class SearchController extends BaseController
{
    /**
     * Display home page.
     */
    public function __invoke(SearchRequest $request): View
    {
        $breadcrumbs = [['href' => 'search', 'search' => request('search'), 'name' => __('Search')]];

        $found = collect();
        $foundProduct = Product::query()->searching()->get();
        $foundArticles = Article::query()->searching()->with('product')->get();

        foreach ($foundProduct as $item) {
            $found->push([
                'image' => $item->image,
                'head' => $this->markFound($item->name),
                'description' => $this->markFound($item->description),
                'link' => route('catalogue',['slug' => $item->slug])
            ]);
        }

        foreach ($foundArticles as $item) {
            $found->push([
                'image' => $item->product->image,
                'head' => $this->markFound($item->name),
                'description' => '<b>'.__('Article').': '.$this->markFound($item->article).'</b>',
                'link' => route('catalogue',['slug' => $item->product->slug])
            ]);
        }

        $found = $found->paginate(10);

        return view('search', [
            'breadcrumbs' => $breadcrumbs,
            'nav_links' => $this->mainMenu,
            'found' => $found
        ]);
    }

    private function markFound(string $verifiable): string
    {
//        $verifiable = strip_tags($verifiable);
        if (preg_match('/'.request('search').'/ui',$verifiable,$matches)) {
            $found = $matches[0];
            if (strpos($verifiable, $found) > 100) {
                $verifiable = '…'.mb_substr($verifiable,100);
            }
            $verifiable = str_replace($found,'<span class="marked">'.$found.'</span>',$verifiable);
        }
//        if (mb_strlen($verifiable) > 300) $verifiable = mb_substr($verifiable,0,300).'…';

        return $verifiable;
    }
}
