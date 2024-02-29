<?php

namespace Database\Seeders;

use App\Models\Komentar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KomentarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker = \Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            $projectId = $i + 1;
            Komentar::create([
                "user_id" => 1,
                "project_id" => $projectId,
                "Komentar" => "Welcome To Website KulaKoding",
            ]);
            Komentar::create([
                "user_id" => 1,
                "project_id" => $projectId,
                "Komentar" => "Welcome To Website KulaKoding",
            ]);
        }
    }
}
