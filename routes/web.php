<?php

use App\Models\Categorie;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('client.home');
});

Route::get('/produit', function () {
    $produits=DB::table("categories")->get();
    return view('client.produit')->with('categories',$produits);
});

Route::get('/service', function () {
    return view('client.service');
});
Route::get('/produit/{nom}', function ($nom_categorie) {
    $nom=$nom_categorie;
    $elements = DB::table('compo_carte')->where('nom', $nom_categorie)->get();

    $categorie = Categorie::where([
        ['nom' , $nom_categorie],
    ])->first();

   return view('client.liste', [
    'elements' => $elements,
    'noms' => $nom,

     ] , compact('categorie'));
})->name('afficher.elements');
