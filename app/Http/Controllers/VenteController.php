<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vente;
use App\Charts\NombreVentes;

class VenteController extends Controller
{
    //
    public function index()
    {
      $ventes=Vente::all();
      $chart = new NombreVentes;
      $data = Vente::groupBy('dateV')->get()
      return view('vente.index',compact('ventes','chart'));

    }


}
