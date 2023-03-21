<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ControllerAfficherProf extends Controller
{
    public function AfficheProf(){
        $prof = DB::table('prof')->get();
        return view('afficherProf', ['prof' => $prof]);
    }
}
