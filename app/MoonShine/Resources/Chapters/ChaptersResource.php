<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Chapters;

use App\Models\Chapter;
use App\MoonShine\Resources\Chapters\Pages\ChaptersIndexPage;
use App\MoonShine\Resources\Chapters\Pages\ChaptersFormPage;
use App\MoonShine\Resources\Chapters\Pages\ChaptersDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<Chapter, ChaptersIndexPage, ChaptersFormPage, ChaptersDetailPage>
 */
class ChaptersResource extends ModelResource
{
    protected string $model = Chapter::class;

    protected string $column = 'title';

    protected string $sortColumn = 'id';

    public function getTitle(): string
    {
        return __('Chapters');
    }
    
    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            ChaptersIndexPage::class,
            ChaptersFormPage::class,
//            ChaptersDetailPage::class,
        ];
    }

    public function search(): array
    {
        return ['title'];
    }
}
