<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ControllerAjouterProf extends Controller
{
    public function AjouterProf(){
        $nom = request('nom');
        $prenom = request('prenom');
        $email=request('email');
        $pass=bcrypt(request('Mot de passe'));
        $cours=request('cours');
        DB::table('prof')->insert(['nom' => $nom, 'prenom' => $prenom, 'email' => $email, 'password' => $pass, 'Cours' => $cours]);
        //$cours = DB::table('cours')->get();
        //return view('afficher');
        return redirect()->route('afficherProf');
    
    }
}
