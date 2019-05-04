<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }

    public function categorieAge()
    {
        return $this->belongsTo('App\CategorieAge');
    }

    public function ambiance()
    {
        return $this->belongsTo('App\Ambiance');
    }

    public function organisateur()
    {
        return $this->belongsTo('App\Organisateur');
    }

    public function ville()
    {
        return $this->belongsTo('App\Ville');
    }
}
