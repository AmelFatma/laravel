<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    //
    public function lots()
    {
        return $this->hasMany('App\Lot');
    }
    public function fournisseur()
    {
        return $this->belongsTo('App\Fournisseur');
    }
}
