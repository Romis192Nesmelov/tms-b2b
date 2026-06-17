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
            ['image' => 'storage/images/icons/icon1.svg', 'text' => 'Собственное производство'],
            ['image' => 'storage/images/icons/icon2.svg', 'text' => 'Полное стоковое наличие'],
            ['image' => 'storage/images/icons/icon3.svg', 'text' => 'Комплексный расчет Вашего проекта'],
            ['image' => 'storage/images/icons/icon4.svg', 'text' => '5 лет работы на рынке'],
            ['image' => 'storage/images/icons/icon5.svg', 'text' => 'Наличие необходимой сертификации'],
            ['image' => 'storage/images/icons/icon6.svg', 'text' => 'Поставка за один день'],
        ];
        
        foreach ($data as $item) {
            $item['active'] = 1;
            Advantage::query()->create($item);
        }
    }
}
