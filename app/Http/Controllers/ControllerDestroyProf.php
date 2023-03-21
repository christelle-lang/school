<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\suppressionProf;
use Illuminate\Http\Request;

class ControllerDestroyProf extends Controller
{
    public function supprimerProf($id)
    {
        $prof = new suppressionProf();
        $prof->supprimer($id);
        return redirect()->route('afficherProf');
    }
}
