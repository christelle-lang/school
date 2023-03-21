<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function edit($id)
{
    $data = Data::find($id);
    if (!$data) {
        return redirect()->back()->withErrors(['message' => 'Donnée non trouvée.']);
    }
    return view('data.edit', compact('data'));
}


public function update(Request $request, $id)
{
    $data = Data::find($id);
    if (!$data) {
        return redirect()->back()->withErrors(['message' => 'Donnée non trouvée.']);
    }
    $data->name = $request->input('name');
    $data->description = $request->input('description');
    $data->save();
    return redirect()->back()->with('success', 'Donnée modifiée avec succès.');
}

}
