<?php

namespace Database\Factories;

use App\Models\News;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<News>
 */
class NewsFactory extends Factory
{
    protected static int $imgCounter = 0;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->text(30);
        $dateDay = rand(1,28);
        $dateMonth = rand(1,12);
        $dateYear = rand(2021,2026);

        self::$imgCounter = self::$imgCounter >= 4 ? 1 : self::$imgCounter + 1;

        return [
            'image' => 'news'.self::$imgCounter.'.jpg',
            'slug' => Str::slug($title),
            'title' => $title,
            'description' => fake()->text(180),
            'text' => generateFakeText(),
            'date' => $dateYear.'-'.$dateMonth.'-'.$dateDay,
            'active' => 1
        ];
    }
}
