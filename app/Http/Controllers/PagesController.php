<?php

namespace App\Http\Controllers;

//Collection::pluck();
use App\Ambiance;
use App\Categorie;
use App\CategorieAge;
use App\Evenement;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Project;

//use function MongoDB\BSON\toJSON;

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
        //return view('pages.choix', compact('categories', 'categoriesAge', 'ambiance','typePayant'));
        //$choix= Evenement::select('categories', 'categoriesAge', 'ambiance','typePayant')->get();

        //json pour la table Ambiance
        $choix = Ambiance::select('id', 'ambiance') ->get();
        //json pour la Table categorie
        $choix2 = Categorie::select('id', 'categorie') ->get();

        //methode pour concatener le json mais le $data doit etre un objet json
        /*$result = array();
        foreach($data as $us){
            array_push($result, $choix,$choix2);
        }
        $result = json_encode($result, JSON_FORCE_OBJECT);


        return json_encode($result);
        */
        return json_encode($choix);


    }
}
