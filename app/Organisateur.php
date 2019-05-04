<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisateur extends Model
{
    protected $table = 'organisateurs';

    public function ville()
    {
        return $this->belongsTo('App\Ville');
    }
    public function evenements()
    {
        return $this->hasMany('App\Evenement');
    }
}
