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
            $user = $i + 1;
            Image::create([
                "project_id" => $user,
                "image" => 'storage/project/q82htCqcrYv2CoGa683vg4yosDFcmskA.png',
            ]);
            Image::create([
                "project_id" => $user,
                "image" => 'storage/project/Mr7fbyPKXfQdDMEwufiXic9r8lnjxSz4.png',
            ]);
        }
    }
}
