<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Content;

use App\Models\Content;
use App\MoonShine\Resources\Content\Pages\ContentIndexPage;
use App\MoonShine\Resources\Content\Pages\ContentFormPage;
use App\MoonShine\Resources\Content\Pages\ContentDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<Content, ContentIndexPage, ContentFormPage, ContentDetailPage>
 */
class ContentResource extends ModelResource
{
    protected string $model = Content::class;

    protected string $column = 'title';

    protected string $sortColumn = 'id';

    public function getTitle(): string
    {
        return __('Content');
    }
    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            ContentIndexPage::class,
            ContentFormPage::class,
//            ContentDetailPage::class,
        ];
    }

    public function search(): array
    {
        return ['title', 'text'];
    }
}
