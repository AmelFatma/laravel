<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    //
    public function ventes()
    {
        return $this->hasMany('App\Vente');
    }

    public function medicament()
    {
        return $this->belongsTo('App\Medicament');
    }

    public function achat()
    {
        return $this->belongsTo('App\Achat');
    }
}
