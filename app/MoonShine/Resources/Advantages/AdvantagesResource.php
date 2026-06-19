<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Advantages;

use Illuminate\Database\Eloquent\Model;
use App\Models\Advantage;
use App\MoonShine\Resources\Advantages\Pages\AdvantagesIndexPage;
use App\MoonShine\Resources\Advantages\Pages\AdvantagesFormPage;
use App\MoonShine\Resources\Advantages\Pages\AdvantagesDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<Advantage, AdvantagesIndexPage, AdvantagesFormPage, AdvantagesDetailPage>
 */
class AdvantagesResource extends ModelResource
{
    protected string $model = Advantage::class;

    protected string $column = 'text';

    protected string $sortColumn = 'id';

    public function getTitle(): string
    {
        return __('Advantages');
    }
    
    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            AdvantagesIndexPage::class,
            AdvantagesFormPage::class,
//            AdvantagesDetailPage::class,
        ];
    }
    public function search(): array
    {
        return ['text'];
    }
}
