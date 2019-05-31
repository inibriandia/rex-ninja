<?php

namespace App\Http\Controllers;

use App\Pays;
use Illuminate\Http\Request;
use View;

class createEventCtrl extends Controller
{
    // $pays = Pays::all();
    //$pays = Pays::pluck('id', 'pays');
    public function index(){
        $pays = Pays::all(['id', 'pays']);
        return View::make('pages.event', compact('pays', $pays));
    }
}
