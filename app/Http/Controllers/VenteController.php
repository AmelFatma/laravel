<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Vente;
use App\Charts\NombreVentes;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

class VenteController extends Controller
{
    //
    public function index()
    {
      $ventes=Vente::all();

      $ventesAll = Vente::select (DB::raw('SUM(qt) as total_qt'))
						->where('dateV','>=',Carbon::now()->firstOfMonth()->toDateTimeString())
                    	->groupBy('dateV')
                    	->get();

      $data = array();              	
        foreach ($ventesAll as $key => $venteDay){
     	    array_push($data, $venteDay->total_qt);
     										  }

	  $jours = Vente::select('dateV')
					->distinct()
					->where('dateV','>=',Carbon::now()->firstOfMonth()->toDateTimeString())
					->orderBy('dateV')
					->get();

	  $jourAll = array();
	    foreach ($jours as $key => $jour){
		    array_push($jourAll, $jour->dateV);

	  $chart = new NombreVentes;							 }
      $chart->labels($jourAll);
      $chart->dataset('Nombre de ventes', 'bar', $data);
      return view('nbVentes.index',['chart' => $chart]);
	}

	
    public function index1()
    {
      $chAAll = Vente::join('lots', 'lots.idL', '=', 'ventes.lot_id')
                    ->select(DB::raw('SUM(qt*lots.prix) as total_prix'))
					->where(DB::raw('YEAR(dateV)'),'=',Carbon::now()->year)
                    ->groupBy(DB::raw('MONTH(dateV)'))
                    ->get();

      $data = array();              	
        foreach ($chAAll as $key => $venteDay){
     	    array_push($data, $venteDay->total_prix);
     										 }
      $mois = Vente::select(DB::raw('MONTH(dateV)as dateV'))
				->distinct()
                ->where(DB::raw('YEAR(dateV)'),'=',Carbon::now()->year)
                ->orderBy('dateV')
                ->get();

	  $moisAll = array();
	    foreach ($mois as $key => $mois){
		    array_push($moisAll, $mois->dateV);
									 }
 
      $chart = new NombreVentes;
      $chart->labels($moisAll);
      $chart->dataset("Chiffre d'affaire", 'bar', $data);
      return view('ChiffreAffaire.index1',['chart' => $chart]);
      //return view('ChiffreAffaire.index1',compact('chart'));
    }
}
