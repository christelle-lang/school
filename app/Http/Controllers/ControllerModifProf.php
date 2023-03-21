<?php

namespace App\Http\Controllers;
use\Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerModifProf extends Controller
{
    public function modificationProf($id){
        $data = DB::table('Prof')->where('id', $id)->first();
        return view('editDataProf',['data' => $data]);
        }
        public function modifProf(Request $request) {
        $id = $request->input('id');
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $email = $request->input('email');
        $pass = $request->input('password');
        $cours = $request->input('cours');
        DB::table('prof')
            ->where('id', $id)
            ->update([
                'nom' => $nom,
                'prenom' => $prenom,
                'email' => $email,
                'password' =>bcrypt($pass) ,
                'Cours' => $cours,
            
            ]);
        return redirect('afficherProf');

    } 
}
