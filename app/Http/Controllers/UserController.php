<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function Index() {
        $user = Auth::user();
        $projects = Project::where("user_id", $user->id)->with("image")->paginate(6);
    
        if ($projects->count() > 0) {
            return response()->json([
                "data" => $projects 
            ], 200);
        } else {
            return response()->json([
                "message" => "Tidak ada project"
            ], 404);
        }
    }
    
}
