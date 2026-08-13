<?php

namespace Database\Seeders;
use App\Models\Product;
use App\Models\Image;
use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'ТМС Strut Профиль монтажный 41х21',
                'description' => '<ul><li>Крепление инженерных систем и коммуникаций;</li><li>Зубцы для точного позиционирования и надежной фиксации;</li><li>Удобство в монтаже;</li><li>Перфорация с тыльной стороны по всей длине;</li><li>Сталь марки 08ПС по ГОСТ 1050-88;</li><li>Покрытие: цинкование по методу Сендзимира (оцинк.);</li><li>Возможен вариант исполнения с горячим цинкованием (горячий цинк).</li></ul>',
                'images' => ['jpg','png','png'],
                'articles' => [
                    [
                        'article' => 21222,
                        'name' => 'ТМС Strut Профиль монтажный 41x21х2х2000 мм (оцинк.)',
                        'length' => 2000,
                        'section' => 2,
                        'density' => 1.422,
                        'package' => 1
                    ],
                    [
                        'article' => 21322,
                        'name' => 'ТМС Strut Профиль монтажный 41x21х2х3000 мм (оцинк.)',
                        'length' => 3000,
                        'section' => 2,
                        'density' => 1.422,
                        'package' => 1
                    ],
                    [
                        'article' => 21622,
                        'name' => 'ТМС Strut Профиль монтажный 41x21х2х6000 мм (оцинк.)',
                        'length' => 6000,
                        'section' => 2,
                        'density' => 1.422,
                        'package' => 1
                    ],
                    [
                        'article' => 21225,
                        'name' => 'ТМС Strut Профиль монтажный 41x21х2,5х2000 мм (оцинк.)',
                        'length' => 2000,
                        'section' => 2.5,
                        'density' => 1.667,
                        'package' => 1
                    ],
                    [
                        'article' => 21325,
                        'name' => 'ТМС Strut Профиль монтажный 41x21х2,5х3000 мм (оцинк.)',
                        'length' => 3000,
                        'section' => 2.5,
                        'density' => 1.667,
                        'package' => 1
                    ],
                    [
                        'article' => 21625,
                        'name' => 'ТМС Strut Профиль монтажный 41x21х2,5х6000 мм (оцинк.)',
                        'length' => 6000,
                        'section' => 2.5,
                        'density' => 1.667,
                        'package' => 1
                    ],
                    [
                        'article' => 22222,
                        'name' => 'ТМС Strut Профиль монтажный 41x21х2х2000 мм (горячий цинк)',
                        'length' => 2000,
                        'section' => 2,
                        'density' => 1.422,
                        'package' => 1
                    ],
                    [
                        'article' => 22322,
                        'name' => 'ТМС Strut Профиль монтажный 41x21х2х3000 мм (горячий цинк)',
                        'length' => 3000,
                        'section' => 2,
                        'density' => 1.422,
                        'package' => 1
                    ],
                    [
                        'article' => 22622,
                        'name' => 'ТМС Strut Профиль монтажный 41x21х2х6000 мм (горячий цинк)',
                        'length' => 6000,
                        'section' => 2,
                        'density' => 1.422,
                        'package' => 1
                    ],
                    [
                        'article' => 22225,
                        'name' => 'ТМС Strut Профиль монтажный 41x21х2,5х2000 мм (горячий цинк)',
                        'length' => 2000,
                        'section' => 2.5,
                        'density' => 1.667,
                        'package' => 1
                    ],
                    [
                        'article' => 22325,
                        'name' => 'ТМС Strut Профиль монтажный 41x21х2,5х3000 мм (горячий цинк)',
                        'length' => 3000,
                        'section' => 2.5,
                        'density' => 1.667,
                        'package' => 1
                    ],
                    [
                        'article' => 22625,
                        'name' => 'ТМС Strut Профиль монтажный 41x21х2,5х6000 мм (горячий цинк)',
                        'length' => 6000,
                        'section' => 2.5,
                        'density' => 1.667,
                        'package' => 1
                    ]
                ],
            ],
            [
                'name' => 'ТМС Strut Профиль монтажный 41х41',
                'description' => '<ul><li>Крепление инженерных систем и коммуникаций;</li><li>Зубцы для точного позиционирования и надежной фиксации;</li><li>Удобство в монтаже;</li><li>Перфорация с тыльной и боковых сторон по всей длине;</li><li>Сталь марки 08ПС по ГОСТ 1050-88;</li><li>Покрытие: цинкование по методу Сендзимира ;</li><li>Возможен вариант исполнения с горячим цинкованием (горячий цинк).</li></ul>',
                'images' => ['png','jpg','png'],
                'articles' => [
                    [
                        'article' => 21242,
                        'name' => 'ТМС Strut Профиль монтажный 41x41х2х2000 мм (оцинк.)',
                        'length' => 2000,
                        'section' => 2,
                        'density' => 2.12,
                        'package' => 1
                    ],
                    [
                        'article' => 21342,
                        'name' => 'ТМС Strut Профиль монтажный 41x41х2х3000 мм (оцинк.)',
                        'length' => 3000,
                        'section' => 2,
                        'density' => 2.12,
                        'package' => 1
                    ],
                    [
                        'article' => 21642,
                        'name' => 'ТМС Strut Профиль монтажный 41x41х2х6000 мм (оцинк.)',
                        'length' => 6000,
                        'section' => 2,
                        'density' => 2.12,
                        'package' => 1
                    ],
                    [
                        'article' => 21245,
                        'name' => 'ТМС Strut Профиль монтажный 41x41х2.5х2000 мм (оцинк.)',
                        'length' => 2000,
                        'section' => 2.5,
                        'density' => 2.45,
                        'package' => 1
                    ],
                    [
                        'article' => 21345,
                        'name' => 'ТМС Strut Профиль монтажный 41x41х2.5х3000 мм (оцинк.)',
                        'length' => 3000,
                        'section' => 2.5,
                        'density' => 2.45,
                        'package' => 1
                    ],
                    [
                        'article' => 21645,
                        'name' => 'ТМС Strut Профиль монтажный 41x41х2.5х6000 мм (оцинк.)',
                        'length' => 6000,
                        'section' => 2.5,
                        'density' => 2.45,
                        'package' => 1
                    ],
                    [
                        'article' => 22242,
                        'name' => 'ТМС Strut Профиль монтажный 41x41х2х2000 мм (горячий цинк)',
                        'length' => 2000,
                        'section' => 2,
                        'density' => 2.12,
                        'package' => 1
                    ],
                    [
                        'article' => 22342,
                        'name' => 'ТМС Strut Профиль монтажный 41x41х2х3000 мм (горячий цинк)',
                        'length' => 3000,
                        'section' => 2,
                        'density' => 2.12,
                        'package' => 1
                    ],
                    [
                        'article' => 22642,
                        'name' => 'ТМС Strut Профиль монтажный 41x41х2х6000 мм (горячий цинк)',
                        'length' => 6000,
                        'section' => 2,
                        'density' => 2.12,
                        'package' => 1
                    ],
                    [
                        'article' => 22245,
                        'name' => 'ТМС Strut Профиль монтажный 41x41х2.5х2000 мм (горячий цинк)',
                        'length' => 2000,
                        'section' => 2.5,
                        'density' => 2.45,
                        'package' => 1
                    ],
                    [
                        'article' => 22345,
                        'name' => 'ТМС Strut Профиль монтажный 41x41х2.5х3000 мм (горячий цинк)',
                        'length' => 3000,
                        'section' => 2.5,
                        'density' => 2.45,
                        'package' => 1
                    ],
                    [
                        'article' => 22645,
                        'name' => 'ТМС Strut Профиль монтажный 41x41х2.5х6000 мм (горячий цинк)',
                        'length' => 6000,
                        'section' => 2.5,
                        'density' => 2.45,
                        'package' => 1
                    ]
                ]
            ],
            [
                'name' => 'ТМС Strut Профиль монтажный 41х62',
                'description' => '<ul><li>Крепление инженерных систем и коммуникаций;</li><li>Зубцы для точного позиционирования и надежной фиксации;</li><li>Удобство в монтаже;</li><li>Пперфорация с тыльной стороны по всей длине;</li><li>Сталь марки 08ПС по ГОСТ 1050-88;</li><li>Покрытие: цинкование по методу Сендзимира (оцинк.);</li><li>Возможен вариант исполнения с горячим цинкованием (горячий цинк).</li></ul>',
                'images' => ['jpg','png'],
                'articles' => [
                    [
                        'article' => 21265,
                        'name' => 'ТМС Strut Профиль монтажный 41x62х2.5х2000 мм (оцинк.)',
                        'length' => 2000,
                        'section' => 2.5,
                        'density' => 3.33,
                        'package' => 1
                    ],
                    [
                        'article' => 21365,
                        'name' => 'ТМС Strut Профиль монтажный 41x62х2.5х3000 мм (оцинк.)',
                        'length' => 3000,
                        'section' => 2.5,
                        'density' => 3.33,
                        'package' => 1
                    ],
                    [
                        'article' => 21665,
                        'name' => 'ТМС Strut Профиль монтажный 41x62х2.5х6000 мм (оцинк.)',
                        'length' => 6000,
                        'section' => 2.5,
                        'density' => 3.33,
                        'package' => 1
                    ],
                    [
                        'article' => 22265,
                        'name' => 'ТМС Strut Профиль монтажный 41x62х2.5х2000 мм (горячий цинк)',
                        'length' => 2000,
                        'section' => 2.5,
                        'density' => 3.33,
                        'package' => 1
                    ],
                    [
                        'article' => 22365,
                        'name' => 'ТМС Strut Профиль монтажный 41x62х2.5х3000 мм (горячий цинк)',
                        'length' => 3000,
                        'section' => 2.5,
                        'density' => 3.33,
                        'package' => 1
                    ],
                    [
                        'article' => 22665,
                        'name' => 'ТМС Strut Профиль монтажный 41x62х2.5х6000 мм (горячий цинк)',
                        'length' => 6000,
                        'section' => 2.5,
                        'density' => 3.33,
                        'package' => 1
                    ]
                ]
            ],
            [
                'name' => 'ТМС Strut Профиль монтажный двойной 41х82 (41х41 D)',
                'description' => '<ul><li>Крепление инженерных систем;</li><li>Ззубцы для точного позиционирования и надежной фиксации;</li><li>Удобство в монтаже;</li><li>Пперфорация по всей длине;</li><li>Сталь марки 08ПС по ГОСТ 1050-88;</li><li>Покрытие: горячее цинкование.</li></ul>',
                'images' => ['jpg','png'],
                'articles' => [
                    [
                        'article' => 23685,
                        'name' => 'ТМС Strut Профиль монтажный двойной 41x82(41х2)х2,5х6000 мм (горячий цинк)',
                        'length' => 6000,
                        'section' => 2.5,
                        'density' => 4.9,
                        'package' => 1
                    ]
                ]
            ],
            [
                'name' => 'ТМС Strut Консоль 41х41',
                'description' => '<ul><li>Применяется для крепления кабеленесущих лотков, трубопроводов, вентиляционных каналов;</li><li>Служит опорой при монтаже к стенам, колоннам и перекрытиям;</li><li>Устанавливается в составе систем STRUT как горизонтальный выносной элемент;</li><li>Материал: конструкционная сталь;</li><li>Покрытие: гальваническое цинкование;</li><li>Возможен вариант исполнения с горячим цинкованием (гор.цинк) по предварительному заказу.</li></ul>',
                'images' => ['png','png','jpg','png'],
                'articles' => [
                    [
                        'article' => 214051,
                        'name' => 'ТМС Strut Консоль 41х41х2.5х300 мм (оцинк.)',
                        'length' => 300,
                        'size' => '41х41',
                        'section' => 2.5,
                        'density' => 1.125,
                        'package' => 1
                    ],
                    [
                        'article' => 214052,
                        'name' => 'ТМС Strut Консоль 41х41х2.5х350 мм (оцинк.)',
                        'length' => 350,
                        'size' => '41х41',
                        'section' => 2.5,
                        'density' => 1.25,
                        'package' => 1
                    ],
                    [
                        'article' => 214053,
                        'name' => 'ТМС Strut Консоль 41х41х2.5х400 мм (оцинк.)',
                        'length' => 400,
                        'size' => '41х41',
                        'section' => 2.5,
                        'density' => 1.37,
                        'package' => 1
                    ],
                    [
                        'article' => 214054,
                        'name' => 'ТМС Strut Консоль 41х41х2.5х500 мм (оцинк.)',
                        'length' => 500,
                        'size' => '41х41',
                        'section' => 2.5,
                        'density' => 1.65,
                        'package' => 1
                    ],
                    [
                        'article' => 214059,
                        'name' => 'ТМС Strut Консоль 41х41х2.5х700 мм (оцинк.)',
                        'length' => 700,
                        'size' => '41х41',
                        'section' => 2.5,
                        'density' => 2.15,
                        'package' => 1
                    ]
                ]
            ],
        ];

        foreach ($data as $counterPr => $product) {
            $productObj = Product::query()->create([
                'image' => 'product'.($counterPr + 1).'.png',
                'name' => $product['name'],
                'description' => $product['description'],
                'slug' => Str::slug($product['name']),
                'active' => 1
            ]);

            foreach ($product['images'] as $counterIm => $imType) {
                Image::query()->create([
                    'image' => 'product'.($counterPr + 1).'_'.($counterIm + 1).'.'.$imType,
                    'product_id' => $productObj->id,
                    'active' => 1
                ]);
            }

            foreach ($product['articles'] as $article) {
                $article['product_id'] = $productObj->id;
                $article['active'] = 1;
                Article::query()->create($article);
            }
        }
    }
}
