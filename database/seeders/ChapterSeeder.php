<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Chapter;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<=6;$i++) {
            Chapter::query()->create([
                'image' => 'storage/images/catalogue/chapter'.$i.'.jpg',
                'title' => 'Раздел '.$i,
                'active' => 1
            ]);
        }
    }
}
