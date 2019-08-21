<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    //
    public function lot()
    {
        return $this->belongsTo('App\Lot');
    }

    public function pharmacien()
    {
        return $this->belongsTo('App\Pharmacien');
    }
}
