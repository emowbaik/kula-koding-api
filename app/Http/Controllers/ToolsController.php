<?php

namespace App\Http\Controllers;

use App\Http\Requests\ToolsRequest;
use App\Models\Tools;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ToolsController extends Controller
{
    function Index()
    {
        $tools = Tools::all();

        return response()->json([
            "tools" => $tools,
        ], 200);
    }

    function Show($id)
    {
        $tools = Tools::firstWhere("id", $id);

        return response()->json([
            "tools" => $tools,
        ], 200);
    }

    // function Store(ToolsRequest $request) {

    //     $payload = $request->validated();

    //     $file = $request->file("image");
    //     $extension = $file->extension();
    //     $dir = "storage/tools/";
    //     $name = Str::random(20) . "." . $extension;
    //     $image = $dir . $name;
    //     $file->move($dir, $name);

    //     $payload["image"] = $image;

    //     $tools = Tools::create($payload);

    //     return response()->json([
    //         "message" => "Data berhasil ditambahkan"
    //     ], 201);
    // }

    function Store(ToolsRequest $request)
    {
        $Tools = new Tools();
        // kecilkan ukuran tinggi dan lebar svg icon dari request 
        $icon = $request->icon;
        // $icon = preg_replace('/height=".*?"/', 'height="48"', $icon);
        // $icon = preg_replace('/width=".*?"/', 'width="45"', $icon);
        // // bila tidak ada width dan height, tambahkan
        $icon = preg_replace('/<svg/', "<svg width='40px' height='40px'", $icon);
        // $icon = preg_replace('/path/', "<path stroke='#ffffff'", $icon);
        // // apabila ada w- dan h- tambahkan [35px] di belakangnya
        // $icon = preg_replace('/w-[0-9]+/', 'w-12', $icon);
        // $icon = preg_replace('/h-[0-9]+/', 'h-12', $icon);


        $Tools->tools = $request->tools;
        // $Tools->is_active = 1;
        $Tools->icon = $icon;

        $Tools->save();

        return response()->json([
            "message" => "Data berhasil ditambahkan"
        ], 201);
    }
}
