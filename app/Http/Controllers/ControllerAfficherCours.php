<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ControllerAfficherCours extends Controller
{
    public function AfficheCours(){
    $cours = DB::table('cours')->get();
    return view('afficherCours', ['cours' => $cours]);
}

}
