<?php

namespace App\Http\Controllers;

use App\Ambiance;
use App\Categorie;
use App\CategorieAge;
use App\Evenement;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    // EP de Ange
    // Retourner les donnes des tables correpondantes aux questions
    public function indiquerChoix()
    {
        $categories = Categorie::all();
        $categoriesAge = CategorieAge::all();
        $ambiance = Ambiance::all();
        $typePayant = Evenement::all();

        // return view('pages.choix')->with('categories', $categories);
        return view('pages.choix', compact('categories', 'categoriesAge', 'ambiance','typePayant'));
    }
}
