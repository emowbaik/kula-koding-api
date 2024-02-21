<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker = \Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            $projectId = $i + 1;
            Image::create([
                "project_id" => $projectId,
                "image" => "storage/project/aETFUnzrvveNNOuu7MnTNxEc2GIKDsNT.png",
            ]);
            Image::create([
                "project_id" => $projectId,
                "image" => "storage/project/l3LO18FhUNJiFfQlgZDOLJ2RU4cB6HqX.png",
            ]);
        }
    }
}
