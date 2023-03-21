<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerAjouterEtudiant extends Controller
     {public function AjouterEtudiant(){
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
