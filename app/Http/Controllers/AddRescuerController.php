<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sauveteur;

class AddRescuerController extends Controller
{
    public function add_rescue(Request $request)
    {
        if(!$request->filled(['name', 'gradeput', 'prenom', 'dateBirth', 'dateDeath', 'genealogie', 'carriere', 'etatcivil', 'urlimage']))
        {
            return redirect()->route('community.resquer');
        } else {
            $rescue = new Sauveteur;
            $rescue->id_grade = $request->input('gradeput');
            $rescue->urlImg = $request->input('urlimage');
            $rescue->nom = $request->input('name');
            $rescue->prenom = $request->input('prenom');
            $rescue->date_naissaince = $request->input('dateBirth');
            $rescue->date_mort = $request->input('dateDeath');
            $rescue->genealogie = $request->input('genealogie');
            $rescue->carriere = $request->input('carriere');
            $rescue->etat_civil = $request->input('etatcivil');
            $rescue->save();
        }
        
        return redirect()->route('resquerList');
    }
}
