<?php

namespace App\Http\Controllers;

use App\Pays;
use Illuminate\Http\Request;
use App\Ville;

class VillesController extends Controller
{
    public function index(){

        $villes = Ville::All();
        return json_encode($villes);
    }

    public function getvilles($id)
    {
        try
        {
            $villes = Ville::select ('ville') ->where ('province_id', $id)->get();
            return json_encode($villes);
        }
        catch(QueryException $ex){
            dd($ex->getMessage());
        }

    }

}
