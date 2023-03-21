<?php
use App\Http\Controllers\ControllerAfficherCours;
use App\Http\Controllers\ControllerAjouterCours;
use App\Http\Controllers\ControllerModifCours;
use App\Http\Controllers\ControllerDestroyCours;


use App\Http\Controllers\ControllerAfficherProf;
use App\Http\Controllers\ControllerAjouterProf;
use App\Http\Controllers\ControllerModifProf;
use App\Http\Controllers\ControllerDestroyProf;

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/aficherCours',[ControllerAjouterCours::class,'AjouterCours'])->name("page.affiche.cours");

Route::post('/afficherProf',[ControllerAjouterProf::class,'AjouterProf'])->name("page.affiche.prof");

Route::get('/ajouterCours', function () {
    return view('ajouterCours');
});

Route::get('/ajouterProf',function(){
    return view('ajouterProf');
});

Route::get('/', function () {
    return view('accueil');
});

Route::get('/afficherCours', [ControllerAfficherCours::class,'AfficheCours'])->name('afficherCours');

Route::get('/afficherProf', [ControllerAfficherProf::class,'AfficheProf'])->name('afficherProf');


Route::delete('/cours/{id}', [ControllerDestroyCours::class,'supprimerCours'])->name('cours.supprimer');

Route::delete('/prof/{id}', [ControllerDestroyProf::class,'supprimerProf'])->name('prof.supprimer');


Route::get('/cours/{id}', [ControllerModifCours::class,'modificationCours'])->name('cours.edit');

Route::post('/cours', [ControllerModifCours::class,'modifCours'])->name('cours.modifie');

Route::get('/prof/{id}', [ControllerModifProf::class,'modificationProf'])->name('prof.edit');

Route::post('/prof', [ControllerModifProf::class,'modifProf'])->name('prof.modifie');
