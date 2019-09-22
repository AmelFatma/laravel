<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    //
    public function achats()
    {
        return $this->hasMany('App\Achat');
    }
}
