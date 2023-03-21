<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ControllerAjouterCours extends Controller
{
   public function AjouterCours(Request $request){
        $nom = $request->input('nom');
        $info = $request->input('info');
        $images = $request->file('image');
        $data = array();

        foreach($images as $image)  {
            $image_nom = $image->getClientOriginalName();
            $image_chemin = 'images/'.$image_nom;
            $image->move(public_path('images'), $image_nom);
            $data[] = $image_chemin;
        }

        $selectedItems = $request->input('selectedItems');
        $items = implode(',', $selectedItems);
        DB::table('cours')->insert(['nom' => $nom, 'info' => $info, 'image' => json_encode($data), 'selection' => $items]);
        return redirect()->route('afficherCours');
    }
}



