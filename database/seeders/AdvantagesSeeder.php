<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Advantage;

class AdvantagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['image' => 'icon1.svg', 'text' => 'Собственное производство'],
            ['image' => 'icon2.svg', 'text' => 'Полное стоковое наличие'],
            ['image' => 'icon3.svg', 'text' => 'Комплексный расчет Вашего проекта'],
            ['image' => 'icon4.svg', 'text' => '5 лет работы на рынке'],
            ['image' => 'icon5.svg', 'text' => 'Наличие необходимой сертификации'],
            ['image' => 'icon6.svg', 'text' => 'Поставка за один день'],
        ];
        
        foreach ($data as $item) {
            $item['active'] = 1;
            Advantage::query()->create($item);
        }
    }
}
