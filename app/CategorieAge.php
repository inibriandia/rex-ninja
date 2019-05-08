<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategorieAge extends Model
{
    public function evenements()
    {
        return $this->hasMany('App\Evenement');
    }
}
