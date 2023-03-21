<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\suppression;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerDestroyCours extends Controller
{
    
        public function supprimerCours($id)
        {
            $cours = new suppression();
            $cours->supprimer($id);
            return redirect()->route('afficherCours');
        }
    }
    
    
    

