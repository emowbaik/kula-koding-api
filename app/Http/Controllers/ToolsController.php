<?php

namespace App\Http\Controllers;

use App\Models\Tools;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ToolsController extends Controller
{
    function Index() {
        $tools = Tools::all();

        return response()->json([
            "tools" => $tools,
        ], 200);
    }

    function Show($id) {
        $tools = Tools::firstWhere("id", $id);

        return response()->json([
            "tools" => $tools,
        ], 200);
    }

    function Store(Request $request) {
        $validation = Validator::make($request->all(), [

        ]);

        $file = $request->file("image");
        $extension = $file->extension();
        $dir = "storage/tools/";
        $name = Str::random(20) . "." . $extension;
        $image = $dir . $name;
        $file->move($dir, $name);

        $payload = [
            "tools" => $request->tools,
            "image" => $image
        ];

        $tools = Tools::create($payload);

        return response()->json([
            "message" => "Data berhasil ditambahkan"
        ], 201);
    }
}
