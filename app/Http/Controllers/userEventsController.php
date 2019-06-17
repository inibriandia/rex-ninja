<?php

namespace App\Http\Controllers;

use App\Evenement;
use Illuminate\Http\Request;
use DB;

class userEventsController extends Controller
{
    public function test()
    {
        $lat = 13.452740;
        $lon = -16.578030;

        $todayDate = date('Y-m-d');
        
        $evenements = Evenement::select('image', 'titre', 'description', 'latitude', 'longitude', 'email',
            DB::raw('sqrt(pow((latitude - ' . $lat . '),2) + pow((longitude - ' . $lon . '),2)) as distance'), 'id')
            ->orderBy('distance', 'asc')
            ->where('dateFin', '>=', $todayDate)
            ->get();
        
        return json_encode($evenements);
    }
    public function index($age, $typeActivite, $categorie, $temps, $prix)
    {
        $todayDate = date('Y-m-d');

        if($age !== 'undefined')
        {
            if($categorie == 1 && $typeActivite == 1){
                $evenements = Evenement::select('image', 'description', 'titre', 'id')
                    ->where('dateFin', '>=', $todayDate)
                    ->get();
            }
            else
            {
                if($categorie == 1)
                {
                    $evenements = Evenement::select('image', 'description', 'titre', 'latitude', 'longitude', 'id')
                        ->where([['ambiance_id', $typeActivite],['dateFin', '>=', $todayDate]])
                        ->get();
                }
                else if($typeActivite == 1)
                {
                    $evenements = Evenement::select('image', 'description', 'titre', 'latitude', 'longitude', 'id')
                        ->where([['categorie_id', $categorie],['dateFin', '>=', $todayDate]])
                        ->get();
                }
                else
                {
                    $evenements = Evenement::select('image', 'description', 'titre', 'latitude', 'longitude', 'id')
                        ->where([['ambiance_id', $typeActivite],['categorie_id', $categorie],['dateFin', '>=', $todayDate]])
                        ->get();
                }
            }
        }
        else
        {
            $evenements = Evenement::select('image', 'description', 'titre', 'latitude', 'longitude', 'id')
                ->where('dateFin', '>=', $todayDate)
                ->get();
        }

        return json_encode($evenements);
        
    }
}
