<?php

namespace App\Http\Controllers;

//Collection::pluck();
use App\Ambiance;
use App\Categorie;
use App\CategorieAge;
use App\Evenement;
use View;
use App\Pays;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use phpDocumentor\Reflection\Project;

// use function MongoDB\BSON\toJSON;

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

        $questions = array('categoriesAge'=>$categoriesAge,'categories'=>$categories,  'ambiances'=>$ambiance);
        return json_encode($questions);
    }



}
