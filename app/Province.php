<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';

    public function pays()
    {
        return $this->belongsTo('App\Pays');
    }

    public function villes()
    {
        return $this->hasMany('App\Ville');
    }
}
