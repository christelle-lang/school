<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerModifCours extends Controller
{
    
        public function modificationCours($id){
        $data = DB::table('cours')->where('id', $id)->first();
        return view('editDataCours',['data' => $data]);
        }
        public function modifCours(Request $request) {
        $id = $request->input('id');
        $nom = $request->input('nom');
        $info = $request->input('info');
        $imagePath = $request->input('image'); 
        DB::table('cours')
            ->where('id', $id)
            ->update([
                'nom' => $nom,
                'info' => $info,
                'image' => $imagePath
            ]);
        return redirect('afficherCours');

    }  

}
    
    
    
    
    
    
    


