<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;
use App\Models\Advantage;
use App\Models\Chapter;
use App\Models\Content;

use App\Models\News;
use App\Models\Slide;
use App\MoonShine\Resources\News\NewsResource;
use App\MoonShine\Resources\Advantages\AdvantagesResource;
use App\MoonShine\Resources\Chapters\ChaptersResource;
use App\MoonShine\Resources\Content\ContentResource;

use App\MoonShine\Resources\Slides\SlidesResource;
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
                    ValueMetric::make(fn () => (string) Link::make(app(SlidesResource::class)->getIndexPageUrl(), __('Slides')))
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
                    ValueMetric::make(fn () => (string) Link::make(app(ChaptersResource::class)->getIndexPageUrl(), __('Chapters')))
                        ->value(fn () => Chapter::count())
                        ->icon('list-bullet'),
                ])->columnSpan(2),
                Column::make([
                    ValueMetric::make(fn () => (string) Link::make(app(NewsResource::class)->getIndexPageUrl(), __('News')))
                        ->value(fn () => News::count())
                        ->icon('newspaper'),
                ])->columnSpan(2),
            ])
        ];
	}
}
