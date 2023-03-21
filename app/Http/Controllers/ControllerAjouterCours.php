<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ControllerAjouterCours extends Controller
{
   public function AjouterCours(Request $request){
        $nom = $request->input('nom');

        $info = $request->input('info');

        $image = $_FILES['image']['name'];
        $image = filter_var($image, FILTER_SANITIZE_STRING);
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = 'images/'.$image;
        move_uploaded_file($image_tmp_name, $image_folder);
        move_uploaded_file($image_tmp_name, $image_folder);

        $selectedItems = request('selectedItems');
        $items = implode(',', $selectedItems);
        DB::table('cours')->insert(['nom' => $nom, 'info' => $info, 'image' => $image_folder,'items' => $items,]);
        return redirect()->route('afficherCours');
    }

}

