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
                "tools" => "Figma",
            ],
            [
                "tools" => "Framer",
            ],
            [
                "tools" => "Python",
            ],
            [
                "tools" => "Arduino",
            ],
            [
                "tools" => "Angular",
            ],
            [
                "tools" => "Bootstrap",
            ],
            [
                "tools" => "Atom",
            ],
            [
                "tools" => "Composer",
            ],
            [
                "tools" => "C++",
            ],
            [
                "tools" => "C#",
            ],
            [
                "tools" => "Dart",
            ],
            [
                "tools" => "Flutter",
            ],
            [
                "tools" => "Go",
            ],
            [
                "tools" => "Godot",
            ],
            [
                "tools" => "Java",
            ],
            [
                "tools" => "Kotlin",
            ],
            [
                "tools" => "Laravel",
            ],
            [
                "tools" => "Tailwind",
            ],
            [
                "tools" => "Vue.js",
            ],
            [
                "tools" => "Unity",
            ],
            [
                "tools" => "Unreal Engine",
            ],
            [
                "tools" => "HTML",
            ],
            [
                "tools" => "CSS",
            ],
            [
                "tools" => "Javascript",
            ],
            [
                "tools" => "PHP",
            ],
            [
                "tools" => "Sublime",
            ],
            [
                "tools" => "React.js",
            ],
            [
                "tools" => "Visual Studio Code",
            ],
        ];

        foreach ($data as $data) {
            Tools::create([
                "tools" => $data["tools"],
            ]);
        }
    }
}
