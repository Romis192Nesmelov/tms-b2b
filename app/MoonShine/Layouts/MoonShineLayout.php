<?php

declare(strict_types=1);

namespace App\MoonShine\Layouts;

use MoonShine\Laravel\Layouts\AppLayout;
use MoonShine\ColorManager\Palettes\PurplePalette;
use MoonShine\ColorManager\ColorManager;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use MoonShine\Contracts\ColorManager\PaletteContract;
use App\MoonShine\Resources\Content\ContentResource;
use MoonShine\MenuManager\MenuItem;
use App\MoonShine\Resources\Advantages\AdvantagesResource;
use App\MoonShine\Resources\Chapters\ChaptersResource;
use App\MoonShine\Resources\News\NewsResource;
use App\MoonShine\Resources\Slides\SlidesResource;

final class MoonShineLayout extends AppLayout
{
    /**
     * @var null|class-string<PaletteContract>
     */
    protected ?string $palette = PurplePalette::class;

    protected function assets(): array
    {
        return [
            ...parent::assets(),
        ];
    }

    protected function menu(): array
    {
        return [
            ...parent::menu(),
            MenuItem::make(SlidesResource::class, __('Slides')),
            MenuItem::make(ContentResource::class, __('Content')),
            MenuItem::make(AdvantagesResource::class, __('Advantages')),
            MenuItem::make(ChaptersResource::class, __('Chapters')),
            MenuItem::make(NewsResource::class, __('News')),
        ];
    }

    /**
     * @param ColorManager $colorManager
     */
    protected function colors(ColorManagerContract $colorManager): void
    {
        parent::colors($colorManager);

        // $colorManager->primary('#00000');
    }

    protected function getFooterCopyright(): string {
        return __('©TMS «Mounting Systems»');
    }
}
