<?php

namespace Database\Seeders;

use App\Models\Tools;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ToolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "tools" => "Figma"
            ],
            [
                "tools" => "HTML"
            ],
            [
                "tools" => "CSS"
            ],
            [
                "tools" => "Javascript"
            ],
            [
                "tools" => "PHP"
            ],
            [
                "tools" => "Composer"
            ],
            [
                "tools" => "NodeJS"
            ],
        ];

        foreach($data as $data) {
            Tools::create([
                "tools" => $data["tools"],
            ]);
        }
    }
}
