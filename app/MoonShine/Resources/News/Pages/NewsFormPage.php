<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\News\Pages;

use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FormBuilderContract;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\Core\TypeCasts\DataWrapperContract;
use App\MoonShine\Resources\News\NewsResource;
use MoonShine\Support\ListOf;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Divider;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Fields\Checkbox;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Text;
use Throwable;


/**
 * @extends FormPage<NewsResource>
 */
class NewsFormPage extends FormPage
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
                        Image::make(__('Image'), 'image')->disk('public')->dir('images/news'),
                    ])->columnSpan(2),
                    Column::make([
                        Text::make(__('Title'), 'title')->required(),
                        Divider::make(),
                        Text::make(__('Description'), 'description')->required(),
                        Divider::make(),
                        TinyMce::make(__('Text'), 'text')->required()->customAttributes(['rows' => 20]),
                        Divider::make(),
                        Checkbox::make(__('Active'), 'active')->nullable()->default(1),
                    ])->columnSpan(10)
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
            'image' => ['required_without:id', 'mimes:svg,jpg,png', 'max:2000'],
            'title' => ['required', 'min:3', 'max:30'],
            'description' => ['required', 'min:3', 'max:191'],
            'text' => ['required', 'min:5', 'max:5000'],
            'active' => ['nullable', 'max:1'],
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
