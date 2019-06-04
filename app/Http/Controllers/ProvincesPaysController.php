<?php

namespace App\Http\Controllers;

use App\Province;
use Illuminate\Http\Request;

class ProvincesPaysController extends Controller
{
    public function getprovinces($id)
    {
        try
        {
            $provinces = Province::select ('id','province') ->where ('pays_id', $id)->get();

            $listProv = array('provinces'=>$provinces);

            return json_encode($listProv);
        }
        catch(QueryException $ex){
            dd($ex->getMessage());
        }

    }

}
