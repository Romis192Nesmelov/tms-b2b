<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Slides;

use Illuminate\Database\Eloquent\Model;
use App\Models\Slide;
use App\MoonShine\Resources\Slides\Pages\SlidesIndexPage;
use App\MoonShine\Resources\Slides\Pages\SlidesFormPage;
use App\MoonShine\Resources\Slides\Pages\SlidesDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<Slide, SlidesIndexPage, SlidesFormPage, SlidesDetailPage>
 */
class SlidesResource extends ModelResource
{
    protected string $model = Slide::class;

    protected string $sortColumn = 'id';

    public function getTitle(): string
    {
        return __('Slides');
    }
    
    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            SlidesIndexPage::class,
            SlidesFormPage::class,
//            SlidesDetailPage::class,
        ];
    }
}
