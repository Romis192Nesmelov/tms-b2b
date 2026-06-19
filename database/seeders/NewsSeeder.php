<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<=4;$i++) {
            News::query()->create([
                'image' => 'news'.$i.'.jpg',
                'title' => 'Новость '.$i,
                'description' => 'Nam consectetur ullamcorper quam, quis porttitor quam posuere at. Curabitur.',
                'active' => 1
            ]);
        }
    }
}
