<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sauveteur;

class AddRescuerController extends Controller
{
    public function add_rescue(Request $request)
    {
        $rescue = new Sauveteur;
        $rescue->nom = $request->input('name');
        $rescue->prenom = $request->input('prenom');
        $rescue->date_naissaince = $request->input('dateBirth');
        $rescue->date_mort = $request->input('dateDeath');
        $rescue->id_grade = $request->input('grade');
        $rescue->etat_civil = $request->input('etatcivil');
        $rescue->carriere = $request->input('carriere');
        $rescue->genealogie = $request->input('genealogie');
        $rescue->save();

        echo"<script language=\"javascript\">";
        echo"alert('le nom : $dateBirth')";
        echo"</script>";
        return view('/community/saved');
    }
}
