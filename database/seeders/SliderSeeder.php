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
        for ($i=1;$i<=5;$i++) {
            Slide::query()->create([
                'image' => 'slide'.$i.'.jpg',
                'active' => 1
            ]);
        }
    }
}
