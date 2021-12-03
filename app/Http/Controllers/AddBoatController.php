<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bateau;

class AddBoatController extends Controller
{
    public function add_boat(Request $request)
    {
        $boat = new Bateau;
        $boat->id_type = $request->input('typeput');
        $boat->nom = $request->input('name');
        $boat->description = $request->input('description');
        $boat->url_image = $request->input('urlimg');
        $boat->save();
        return redirect()->route('community.boat');
    }
}
