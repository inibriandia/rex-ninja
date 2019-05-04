<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    protected $table = 'villes';

    public function province()
    {
        return $this->belongsTo('App\Province');
    }

    public function organisateurs()
    {
        return $this->hasMany('App\Organisateur');
    }
}
