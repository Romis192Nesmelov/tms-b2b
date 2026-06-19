<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\News;

use Illuminate\Database\Eloquent\Model;
use App\Models\News;
use App\MoonShine\Resources\News\Pages\NewsIndexPage;
use App\MoonShine\Resources\News\Pages\NewsFormPage;
use App\MoonShine\Resources\News\Pages\NewsDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<News, NewsIndexPage, NewsFormPage, NewsDetailPage>
 */
class NewsResource extends ModelResource
{
    protected string $model = News::class;

    protected string $column = 'title';

    protected string $sortColumn = 'id';

    public function getTitle(): string
    {
        return __('News');
    }
    
    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            NewsIndexPage::class,
            NewsFormPage::class,
//            NewsDetailPage::class,
        ];
    }

    public function search(): array
    {
        return ['title','description','text'];
    }
}
