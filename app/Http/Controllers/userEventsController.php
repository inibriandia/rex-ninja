<?php

namespace App\Http\Controllers;

use App\Evenement;
use Illuminate\Http\Request;
use DB;

class userEventsController extends Controller
{
    public function index($age, $typeActivite, $categorie, $temps, $prix)
    {
        // Retourner tous les evenements

        //$evenement = Evenement::orderBy('distance', 'asc')->get();
        //return view('evenement.index')->with('evenement', $evenement);
        $lat = 13.452740;
        $lon = -16.578030;

        /*$evenements = Evenement::select('image', 'titre', 'latitude', 'longitude',
                        DB::raw('sqrt(pow((latitude - ' . $lat . '),2) + pow((longitude - ' . $lon . '),2)) as distance'), 'id')->orderBy('distance', 'asc')->get();*/


        /*if($typeActivite == 'vide' || $typeActivite == 4){
            $evenements = Evenement::select('image', 'titre', 'latitude', 'longitude', 'email',
                DB::raw('sqrt(pow((latitude - ' . $lat . '),2) + pow((longitude - ' . $lon . '),2)) as distance'), 'id')->orderBy('distance', 'asc')->get();
        }
        else{
            $evenements = Evenement::select('image', 'titre', 'latitude', 'longitude','email',
                DB::raw('sqrt(pow((latitude - ' . $lat . '),2) + pow((longitude - ' . $lon . '),2)) as distance'), 'id')->where([['ambiance_id', $typeActivite],['categorie_id', $categorie]])->orderBy('distance', 'asc')->get();
        }*/

        /*
        if($categorie == 'vide' || $categorie == 4){
            $evenements = Evenement::select('image', 'titre', 'latitude', 'longitude', 'email',
                DB::raw('sqrt(pow((latitude - ' . $lat . '),2) + pow((longitude - ' . $lon . '),2)) as distance'), 'id')->orderBy('distance', 'asc')->get();
        }
        else{
            $evenements = Evenement::select('image', 'titre', 'latitude', 'longitude','email',
                DB::raw('sqrt(pow((latitude - ' . $lat . '),2) + pow((longitude - ' . $lon . '),2)) as distance'), 'id')->where('categorie_id', $categorie)->orderBy('distance', 'asc')->get();
        }

        */

        if($categorie == 1 && $typeActivite == 1){
            $evenements = Evenement::select('image', 'titre', 'latitude', 'longitude', 'email',
                DB::raw('sqrt(pow((latitude - ' . $lat . '),2) + pow((longitude - ' . $lon . '),2)) as distance'), 'id')
                ->orderBy('distance', 'asc')->get();
        }
        else{
            if($categorie == 1){
                $evenements = Evenement::select('image', 'titre', 'latitude', 'longitude', 'email',
                    DB::raw('sqrt(pow((latitude - ' . $lat . '),2) + pow((longitude - ' . $lon . '),2)) as distance'), 'id')
                    ->where('ambiance_id', $typeActivite)
                    ->orderBy('distance', 'asc')->get();
            }
            else if($typeActivite == 1){
                $evenements = Evenement::select('image', 'titre', 'latitude', 'longitude', 'email',
                    DB::raw('sqrt(pow((latitude - ' . $lat . '),2) + pow((longitude - ' . $lon . '),2)) as distance'), 'id')
                    ->where('categorie_id', $categorie)
                    ->orderBy('distance', 'asc')->get();
            }
            else{
                $evenements = Evenement::select('image', 'titre', 'latitude', 'longitude', 'email',
                    DB::raw('sqrt(pow((latitude - ' . $lat . '),2) + pow((longitude - ' . $lon . '),2)) as distance'), 'id')
                    ->where([['ambiance_id', $typeActivite],['categorie_id', $categorie]])
                    ->orderBy('distance', 'asc')->get();
            }
        }



        /*$evenements = Evenement::select('image', 'titre', 'latitude', 'longitude','email',
            DB::raw('sqrt(pow((latitude - ' . $lat . '),2) + pow((longitude - ' . $lon . '),2)) as distance'), 'id')
            ->where([['ambiance_id', $typeActivite],['categorie_id', $categorie]])->orderBy('distance', 'asc')->get();*/

        return json_encode($evenements);
    }
}
