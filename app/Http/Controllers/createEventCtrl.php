<?php

namespace App\Http\Controllers;

use App\Pays;
use App\Province;
use Illuminate\Http\Request;
use View;

class createEventCtrl extends Controller
{
    // $pays = Pays::all();
    //$pays = Pays::pluck('id', 'pays');
    public function index(){
        $pays = Pays::all(['id', 'pays']);
        $provinces = Province::all(['id', 'province']);

        return View::make('pages.event')->with( compact('pays', $pays))->with(compact('provinces',$provinces));



    }
}
