<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    //
    public function fournisseur()
    {
        return $this->belongsTo('App\Fournisseur');
    }
}
