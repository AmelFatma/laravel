<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vente;
use App\Charts\NombreVentes;
use Carbon\Carbon;
class VenteController extends Controller
{
    //
    public function index()
    {
      $ventes=Vente::all();

      $data = collect([]);
      $data = push(Vente::sum('qt')->where('dateV','>=',Carbon::now()->firstOfMonth()->toDateTimeString())
                            	   ->groupBy('dateV')
                                   ->get());
       // elle me donne + q 1 val esq il faut une boucle?

      $chart = new NombreVentes;
      $chart->labels($data->'dateV');// je pense que c faux!
      $chart->dataset('Nombre de ventes', 'bar', $data);

      return view('ventes.index',['chart' => $chart]);

    }


}
