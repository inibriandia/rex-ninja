<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    protected $table = 'pays';

    public function provinces()
    {
        return $this->hasMany('App\Province');
    }
}
