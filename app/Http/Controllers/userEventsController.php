<?php

namespace App\Http\Controllers;

use App\Evenement;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;

class userEventsController extends Controller
{
    public function test()
    {
        $lat = 13.452740;
        $lon = -16.578030;

        $todayDate = date('Y-m-d');
        
        $evenements = Evenement::select('image', 'titre', 'latitude', 'longitude', 'email',
            DB::raw('sqrt(pow((latitude - ' . $lat . '),2) + pow((longitude - ' . $lon . '),2)) as distance'), 'id')
            ->orderBy('distance', 'asc')
            ->where('dateFin', '>=', $todayDate)
            ->get();
        
        return json_encode($evenements);
    }
    public function index($age, $typeActivite, $categorie, $temps, $minprix,$maxprix)
    {
        $lat = 13.452740;
        $lon = -16.578030;


        $todayDate = date('Y-m-d');


        if($age !== 'undefined')
        {

            if($categorie == 1 && $typeActivite == 1){
                $evenements = Evenement::select('image', 'titre', 'latitude', 'longitude', 'email',
                    DB::raw('sqrt(pow((latitude - ' . $lat . '),2) + pow((longitude - ' . $lon . '),2)) as distance'), 'id')
                    ->orderBy('distance', 'asc')
                    ->where('dateFin', '>=', $todayDate)
                    ->get();
            }
            else{
                if($categorie == 1){
                    $evenements = Evenement::select('image', 'titre', 'latitude', 'longitude', 'email',
                        DB::raw('sqrt(pow((latitude - ' . $lat . '),2) + pow((longitude - ' . $lon . '),2)) as distance'), 'id')
                        ->where([['ambiance_id', $typeActivite],['dateFin', '>=', $todayDate]])
                        ->orderBy('distance', 'asc')->get();
                }
                else if($typeActivite == 1){
                    $evenements = Evenement::select('image', 'titre', 'latitude', 'longitude', 'email',
                        DB::raw('sqrt(pow((latitude - ' . $lat . '),2) + pow((longitude - ' . $lon . '),2)) as distance'), 'id')
                        ->where([['categorie_id', $categorie],['dateFin', '>=', $todayDate]])
                        ->orderBy('distance', 'asc')->get();
                }
                else{
                    $evenements = Evenement::select('image', 'titre', 'latitude', 'longitude', 'email',
                        DB::raw('sqrt(pow((latitude - ' . $lat . '),2) + pow((longitude - ' . $lon . '),2)) as distance'), 'id')
                        ->where([['ambiance_id', $typeActivite],['categorie_id', $categorie],['dateFin', '>=', $todayDate]])
                        ->orderBy('distance', 'asc')->get();
                }
            }

        }
        else
        {
            $evenements = Evenement::select('image', 'titre', 'latitude', 'longitude', 'email',
                DB::raw('sqrt(pow((latitude - ' . $lat . '),2) + pow((longitude - ' . $lon . '),2)) as distance'), 'id')
                ->orderBy('distance', 'asc')
                ->where('dateFin', '>=', $todayDate)
                ->get();
        }


        return json_encode($evenements);
        
    }
}
