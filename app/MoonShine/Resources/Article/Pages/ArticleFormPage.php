<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Article\Pages;

use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FormBuilderContract;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\Core\TypeCasts\DataWrapperContract;
use App\MoonShine\Resources\Article\ArticleResource;
use MoonShine\Support\ListOf;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Divider;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Fields\Checkbox;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Text;
use Throwable;


/**
 * @extends FormPage<ArticleResource>
 */
class ArticleFormPage extends FormPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Grid::make([
                    Column::make([
                        BelongsTo::make(__('Product'), 'product', fn ($item) => $item->name),
                        Divider::make(),
                        Number::make(__('Article'), 'article')->required(),
                        Divider::make(),
                        Text::make(__('Name'), 'name')->required(),
                        Divider::make(),
                        Number::make(__('Length'), 'length')->required()
                    ])->columnSpan(10),
                    Column::make([
                        Text::make(__('Size'), 'size')->nullable(),
                        Text::make(__('Section'), 'section')->required(),
                        Text::make(__('Density'), 'density')->required(),
                        Number::make(__('Package'), 'package')->required(),
                        Divider::make(),
                        Checkbox::make(__('Active'), 'active')->nullable()->default(1),
                    ])->columnSpan(2),
                ])
            ]),
        ];
    }

    protected function buttons(): ListOf
    {
        return parent::buttons();
    }

    protected function formButtons(): ListOf
    {
        return parent::formButtons();
    }

    protected function rules(DataWrapperContract $item): array
    {
        return [
            'name' => ['required', 'min:3', 'max:191'],
            'length' => ['required', 'integer'],
            'size' => ['nullable', 'regex:/^(\d)[1-3](x|х)(\d)[1-3]$/i'],
            'section' => ['required', 'numeric'],
            'density' => ['required', 'numeric'],
            'package' => ['required', 'integer'],
            'active' => ['nullable', 'max:1'],
            'product_id' => ['required', 'integer', 'exists:products,id'],
        ];
    }

    /**
     * @param  FormBuilder  $component
     *
     * @return FormBuilder
     */
    protected function modifyFormComponent(FormBuilderContract $component): FormBuilderContract
    {
        return $component;
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function topLayer(): array
    {
        return [
            ...parent::topLayer()
        ];
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function mainLayer(): array
    {
        return [
            ...parent::mainLayer()
        ];
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function bottomLayer(): array
    {
        return [
            ...parent::bottomLayer()
        ];
    }
}
