<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function evenements(){
        return $this->hasMany('App\Evenement');}
}
