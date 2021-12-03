<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sauveteur;

class AddRescuerController extends Controller
{
    public function add_rescue(Request $request)
    {
        $rescue = new Sauveteur;
        $rescue->id_grade = $request->input('gradeput');
        $rescue->nom = $request->input('name');
        $rescue->prenom = $request->input('prenom');
        $rescue->date_naissaince = $request->input('dateBirth');
        $rescue->date_mort = $request->input('dateDeath');
        $rescue->genealogie = $request->input('genealogie');
        $rescue->carriere = $request->input('carriere');
        $rescue->etat_civil = $request->input('etatcivil');
        $rescue->save();
        return view('/community/saved');
    }
}
