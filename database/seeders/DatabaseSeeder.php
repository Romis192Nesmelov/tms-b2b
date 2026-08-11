<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(MoonshineUserSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(AdvantagesSeeder::class);
        $this->call(ContentSeeder::class);
        News::factory(30)->create();
    }
}
