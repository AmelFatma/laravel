<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    //
    public function lots()
    {
        return $this->hasMany('App\Lot');
    }
}
