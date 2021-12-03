<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddRescuerController extends Controller
{
    public function add_rescue(Request $request)
    {
        $nom = $request->input('name');
        $prenom = $request->input('prenom');
        $dateBirth = $request->input('dateBirth');
        $dateDeath = $request->input('dateDeath');
        $grade = $request->input('grade');
        $etatcivil = $request->input('etatcivil');
        $carriere = $request->input('carriere');
        $genealogie = $request->input('genealogie');

        
    }
}
