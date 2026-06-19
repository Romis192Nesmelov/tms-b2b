<?php

namespace Database\Seeders;
use App\Models\MoonshineUser;
use Illuminate\Database\Seeder;

class MoonshineUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Romis',
                'email' => 'romis.nesmelov@gmail.com',
                'password' => bcrypt('apg192')
            ],
            [
                'name' => 'Danila',
                'email' => 'danila.solodovnikov@titan-ms.ru',
                'password' => bcrypt('danila')
            ],
        ];

        foreach ($users as $user) {
            MoonshineUser::query()->create($user);
        }
    }
}
