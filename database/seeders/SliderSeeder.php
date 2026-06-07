<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Slide;

class SliderSeeder extends Seeder
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
                'image' => 'images/slider/slide1.jpg',
                'active' => 1,
            ],
            [
                'image' => 'images/slider/slide2.jpg',
                'active' => 1,
            ],
            [
                'image' => 'images/slider/slide3.jpg',
                'active' => 1,
            ],
            [
                'image' => 'images/slider/slide4.jpg',
                'active' => 1,
            ],
            [
                'image' => 'images/slider/slide5.jpg',
                'active' => 1,
            ],
        ];

        foreach ($data as $user) {
            Slide::query()->create($user);
        }
    }
}
