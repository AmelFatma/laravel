<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LotController extends Controller
{
    public function indeex(){
    $chAAll = Vente::join('Lot', 'ventes.id', '=', 'Lot.vente_id')
                    ->select(DB::raw('SUM(qt*prix) as total_prix'))
					->where(DB::raw('YEAR(dateV)'),'=',Carbon::now()->year)
                    ->groupBy(DB::raw('MONTH(dateV)'))
                    ->get();
                }
}
