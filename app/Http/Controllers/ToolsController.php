<?php

namespace App\Http\Controllers;

use App\Models\Tools;
use Illuminate\Http\Request;

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
}
