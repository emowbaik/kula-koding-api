<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            Project::create([
                "user_id" => 1,
                "tool" => '[
                    {
                        "id": 1,
                        "tools": "Figma",
                        "created_at": "2024-02-21T00:41:56.000000Z",
                        "updated_at": "2024-02-21T00:41:56.000000Z"
                    },
                    {
                        "id": 2,
                        "tools": "HTML",
                        "created_at": "2024-02-21T00:41:56.000000Z",
                        "updated_at": "2024-02-21T00:41:56.000000Z"
                    }
                ]',
                "nama_project" => $faker->name(),
                "deskripsi" => $faker->paragraph(),
            ]);
        }
    }
}
