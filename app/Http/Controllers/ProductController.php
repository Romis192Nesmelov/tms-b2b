<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class ProductController extends BaseController
{
    /**
     * Display home page.
     */
    public function __invoke($slug=null): View
    {
        $breadcrumbs = [['href' => 'catalogue', 'name' => __('Catalogue')]];
        if ($slug) {
            if ($product = Product::query()
                ->where('slug',$slug)
                ->where('active',1)
                ->with('activeImages')
                ->first()
            ) {
                $breadcrumbs[] = ['href' => 'catalogue', 'slug' => $product->slug, 'name' => $product->name];
                return view('product', [
                    'breadcrumbs' => $breadcrumbs,
                    'nav_links' => $this->mainMenu,
                    'product' => $product
                ]);
            } else abort(404);
        } else {
            return view('catalogue', [
                'breadcrumbs' => $breadcrumbs,
                'nav_links' => $this->mainMenu,
                'products' => Product::query()->where('active',1)->get(),
            ]);
        }
    }
}
