<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;
use App\Models\Advantage;
use App\Models\Product;
use App\Models\Content;

use App\Models\Image;
use App\Models\News;
use App\Models\Slide;
use App\MoonShine\Resources\Image\ImageResource;
use App\MoonShine\Resources\News\NewsResource;
use App\MoonShine\Resources\Advantages\AdvantagesResource;
use App\MoonShine\Resources\Product\ProductResource;
use App\MoonShine\Resources\Content\ContentResource;

use App\MoonShine\Resources\Slide\SlideResource;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Grid;

use MoonShine\Laravel\Pages\Page;
use MoonShine\UI\Components\Link;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Components\Metrics\Wrapped\ValueMetric;

#[\MoonShine\MenuManager\Attributes\SkipMenu]

class Dashboard extends Page
{
    /**
     * @return array<string, string>
     */
    public function getBreadcrumbs(): array
    {
        return [
            '#' => $this->getTitle()
        ];
    }

    public function getTitle(): string
    {
        return $this->title ?: __('Home');
    }

    /**
     * @return list<ComponentContract>
     */
    protected function components(): iterable
	{
		return [
            Grid::make([
                Column::make([
                    ValueMetric::make(fn () => (string) Link::make(app(SlideResource::class)->getIndexPageUrl(), __('Slides')))
                        ->value(fn () => Slide::count())
                        ->icon('photo'),
                ])->columnSpan(2),
                Column::make([
                    ValueMetric::make(fn () => (string) Link::make(app(ContentResource::class)->getIndexPageUrl(), __('Content')))
                        ->value(fn () => Content::count())
                        ->icon('pencil-square'),
                ])->columnSpan(2),
                Column::make([
                    ValueMetric::make(fn () => (string) Link::make(app(AdvantagesResource::class)->getIndexPageUrl(), __('Advantages')))
                        ->value(fn () => Advantage::count())
                        ->icon('trophy'),
                ])->columnSpan(2),
                Column::make([
                    ValueMetric::make(fn () => (string) Link::make(app(ProductResource::class)->getIndexPageUrl(), __('Products')))
                        ->value(fn () => Product::count())
                        ->icon('list-bullet'),
                ])->columnSpan(2),
                Column::make([
                    ValueMetric::make(fn () => (string) Link::make(app(ImageResource::class)->getIndexPageUrl(), __('Images')))
                        ->value(fn () => Image::count())
                        ->icon('camera'),
                ])->columnSpan(2),
//                Column::make([
//                    ValueMetric::make(fn () => (string) Link::make(app(NewsResource::class)->getIndexPageUrl(), __('News')))
//                        ->value(fn () => News::count())
//                        ->icon('newspaper'),
//                ])->columnSpan(2),
            ])
        ];
	}
}
