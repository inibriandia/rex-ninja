<?php

namespace App\Http\Controllers;

use App\Evenement;
use Illuminate\Http\Request;
use DB;

class userEventsController extends Controller
{
    public function index($age, $typeActivite, $categorie, $temps, $minprix, $maxprix)
    {
        $todayDate = date('Y-m-d');
        $op = '>=';
        $ref = '12:00';

        if($temps == 'am'){
            $op = '<=';
        }
        else if($temps == 'pm'){
            $op = '>=';
        }

        if($age !== 'undefined')
        {
            if($categorie == 1 && $typeActivite == 1){
                $evenements = Evenement::select('image', 'description', 'titre', 'id')
                    ->where([['dateFin', '>=', $todayDate], ['prix','>=', $minprix] ,['prix','<=', $maxprix]])
                    ->orwhere('heureDebut',$op, $ref)
                    ->orwhere('heureFin',$op, $ref)
                    ->get();
            }
            else
            {
                if($categorie == 1)
                {
                    $evenements = Evenement::select('image', 'description', 'titre', 'latitude', 'longitude', 'id')
                        ->where([['ambiance_id', $typeActivite],['dateFin', '>=', $todayDate], ['prix','>=', $minprix] ,['prix','<=', $maxprix]])
                        ->orwhere('heureDebut',$op, $ref)
                        ->orwhere('heureFin',$op, $ref)
                        ->get();
                }
                else if($typeActivite == 1)
                {
                    $evenements = Evenement::select('image', 'description', 'titre', 'latitude', 'longitude', 'id')
                        ->where([['categorie_id', $categorie],['dateFin', '>=', $todayDate], ['prix','>=', $minprix] ,['prix','<=', $maxprix]])
                        ->orwhere('heureDebut',$op, $ref)
                        ->orwhere('heureFin',$op, $ref)
                        ->get();
                }
                else
                {
                    $evenements = Evenement::select('image', 'description', 'titre', 'latitude', 'longitude', 'id')
                        ->where([['ambiance_id', $typeActivite],['categorie_id', $categorie],['dateFin', '>=', $todayDate], ['prix','>=', $minprix] ,['prix','<=', $maxprix]])
                        ->orwhere('heureDebut',$op, $ref)
                        ->orwhere('heureFin',$op, $ref)
                        ->get();
                }
            }
        }
        else
        {
            $evenements = Evenement::select('image', 'description', 'titre', 'latitude', 'longitude', 'id')
                ->where([['dateFin', '>=', $todayDate], ['prix','>=', $minprix] ,['prix','<=', $maxprix]])
                ->orwhere('heureDebut',$op, $ref)
                ->orwhere('heureFin',$op, $ref)
                ->get();
        }

        return json_encode($evenements);

    }
}
