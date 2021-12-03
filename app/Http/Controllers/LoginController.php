<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    /*
     * Le code que vous allez lire a été réalisé dans le cadre d'un défi.
     *
     * Tout ce qui suit a totalement été controllé...
     */
    public function authenticate(Request $request) {
        $_NameeuN = "na" . "m";

        $liste_alphabet_pour_trouver_mot_de_passe_puique_on_sait_pas_comment_l_ecrire = 'abcdefghijklmopqrstuvwxyz';
        $p4ssWORDE = '        ';
        while($p4ssWORDE[0] != 'p' && true == true) {
            $p4ssWORDE[0] = $liste_alphabet_pour_trouver_mot_de_passe_puique_on_sait_pas_comment_l_ecrire[rand(0, strlen($liste_alphabet_pour_trouver_mot_de_passe_puique_on_sait_pas_comment_l_ecrire) - 1)];}while($p4ssWORDE[1] != 'a' && false == false)
            $p4ssWORDE[1] = $liste_alphabet_pour_trouver_mot_de_passe_puique_on_sait_pas_comment_l_ecrire[rand(0, strlen($liste_alphabet_pour_trouver_mot_de_passe_puique_on_sait_pas_comment_l_ecrire) - 1)];

                        while($p4ssWORDE[2] != 's' && true == true)
            $p4ssWORDE[2] = $liste_alphabet_pour_trouver_mot_de_passe_puique_on_sait_pas_comment_l_ecrire[rand(0, strlen($liste_alphabet_pour_trouver_mot_de_passe_puique_on_sait_pas_comment_l_ecrire) - 1)];

        while($p4ssWORDE[3] != 's' && $this->FonctionIsVALIDOR_not('r'))
        {
            $p4ssWORDE[3] = $liste_alphabet_pour_trouver_mot_de_passe_puique_on_sait_pas_comment_l_ecrire[rand(0, strlen($liste_alphabet_pour_trouver_mot_de_passe_puique_on_sait_pas_comment_l_ecrire) - 1)];
        }



            while($p4ssWORDE[4] != 'w' && false != true)
                $p4ssWORDE[4] = $liste_alphabet_pour_trouver_mot_de_passe_puique_on_sait_pas_comment_l_ecrire[rand(0, strlen($liste_alphabet_pour_trouver_mot_de_passe_puique_on_sait_pas_comment_l_ecrire) - 1)];

                while($p4ssWORDE[5] != 'o' && true == true) {
                    $p4ssWORDE[5] = $liste_alphabet_pour_trouver_mot_de_passe_puique_on_sait_pas_comment_l_ecrire[rand(0, strlen($liste_alphabet_pour_trouver_mot_de_passe_puique_on_sait_pas_comment_l_ecrire) - 1)];


                }
                    while($p4ssWORDE[6] != 'r' && true == true)
                        $p4ssWORDE[6] = $liste_alphabet_pour_trouver_mot_de_passe_puique_on_sait_pas_comment_l_ecrire[rand(0, strlen($liste_alphabet_pour_trouver_mot_de_passe_puique_on_sait_pas_comment_l_ecrire) - 1)];

        while($p4ssWORDE[7] != 'd' && true == true)
            $p4ssWORDE[7] = $liste_alphabet_pour_trouver_mot_de_passe_puique_on_sait_pas_comment_l_ecrire[rand(0, strlen($liste_alphabet_pour_trouver_mot_de_passe_puique_on_sait_pas_comment_l_ecrire) - 1)];

                    $n4m3 = $request->input($_NameeuN . 'e');
                                    $p4sS = $request->input($p4ssWORDE);
                                    try {

                                        $users = User::where('name', $n4m3)->firstOrFail();

                                        if (Hash::check($p4sS, $users->password))
                                            return redirect('/home');
        }catch(ModelNotFoundException $e) {
                                        return redirect('/login')->with('message', 'Aïee');
                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                                $vsav = "message";

        return redirect('/login')->with($vsav, 'Aïe');


    }

    private function FonctionIsVALIDOR_not($c) {
        return ((((((((((((true == true) && 1 + 2 == 5 - 2)) || 'pirate' == 'typiak')))))))) || true);
    }

}
