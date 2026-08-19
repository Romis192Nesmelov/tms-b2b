<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Order\Pages;

use MoonShine\Laravel\Fields\Relationships\BelongsToMany;
use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FormBuilderContract;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\Core\TypeCasts\DataWrapperContract;
use App\MoonShine\Resources\Order\OrderResource;
use MoonShine\Support\ListOf;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Divider;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Fields\Checkbox;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\Email;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\Phone;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;
use Throwable;


/**
 * @extends FormPage<OrderResource>
 */
class OrderFormPage extends FormPage
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
                        Text::make(__('User name'), 'name')->required(),
                        Email::make(__('E-mail'), 'email')->required(),
                        Phone::make(__('Phone'), 'phone')->required(),
                        Divider::make(),
                        Grid::make([
                            Column::make([
                                Date::make(__('Date of creation'),'created_at')->required()->format('Y-m-d H:i:s'),
                            ])->columnSpan(6),
                            Column::make([
                                Divider::make(),
                                Checkbox::make(__('Order is over'), 'over')->nullable()->default(1),
                            ])->columnSpan(6),
                        ])
                    ])->columnSpan(6),
                    Column::make([
                        Textarea::make(__('User message'), 'text')->customAttributes(['rows' => 14]),
                    ])->columnSpan(6)
                ]),
                BelongsToMany::make(
                    __('Articles'),
                    'articles',
                    fn ($item) => '<b>'.$item->article.'</b> '.$item->name
                )
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
            'name' =>       ['required', 'min:3', 'max:191'],
            'email' =>      ['required', 'email'],
            'phone' =>      ['required','regex:/^((\+)?(\d)(\s)?(\()?[0-9]{3}(\))?(\s)?([0-9]{3})(\-)?([0-9]{2})(\-)?([0-9]{2}))$/'],
            'text' =>       ['required', 'min:5', 'max:5000'],
            'created_at' => ['required','date'],
            'over' =>       ['nullable', 'max:1'],
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
