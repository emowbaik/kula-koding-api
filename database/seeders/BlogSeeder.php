<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            Blog::create([
                "user_id" => 1,
                "judul" => $faker->name(),
                "thumbnail" => "storage/project/l3LO18FhUNJiFfQlgZDOLJ2RU4cB6HqX.png",
                "slug" => $faker->paragraph(),
                "konten" => $faker->paragraph(),
            ]);
        }
    }
}
