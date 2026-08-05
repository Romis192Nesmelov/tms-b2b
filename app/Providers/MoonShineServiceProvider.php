<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShine;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;
use App\MoonShine\Resources\MoonShineUser\MoonShineUserResource;
use App\MoonShine\Resources\MoonShineUserRole\MoonShineUserRoleResource;
use App\MoonShine\Resources\Content\ContentResource;
use App\MoonShine\Resources\Advantages\AdvantagesResource;
use App\MoonShine\Resources\Product\ProductResource;
use App\MoonShine\Resources\News\NewsResource;
use App\MoonShine\Resources\Slide\SlideResource;
use App\MoonShine\Resources\Image\ImageResource;

class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param  CoreContract<MoonShineConfigurator>  $core
     */
    public function boot(CoreContract $core): void
    {
        $core
            ->resources([
                MoonShineUserResource::class,
                MoonShineUserRoleResource::class,
                ContentResource::class,
                AdvantagesResource::class,
                ProductResource::class,
                NewsResource::class,
                SlideResource::class,
                ImageResource::class,
            ])
            ->pages([
                ...$core->getConfig()->getPages(),
            ])
        ;
    }
}
