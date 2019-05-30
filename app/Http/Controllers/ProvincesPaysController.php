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
            $provinces = Province::select ('province') ->where ('pays_id', $id)->get();
            return json_encode($provinces);
        }
        catch(QueryException $ex){
            dd($ex->getMessage());
        }

    }

}
