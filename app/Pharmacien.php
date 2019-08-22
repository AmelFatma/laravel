<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacien extends Model
{
    //
    public function ventes()
    {
        return $this->hasMany('App\Vente');
    }
}
