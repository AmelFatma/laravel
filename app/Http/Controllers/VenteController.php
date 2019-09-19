<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Vente;
use App\Charts\NombreVentes;
use Carbon\Carbon;
class VenteController extends Controller
{
    //
    public function index()
    {
      $ventes=Vente::all();

     $data = array();
     $datalabel = collect([]);

     $ventesAll = Vente::select (DB::raw('SUM(qt) as total_qt'))
						->where('dateV','>=',Carbon::now()->firstOfMonth()->toDateTimeString())
                    	->groupBy('dateV')
                    	->get();
     foreach ($ventesAll as $key => $venteDay) {
     	array_push($data, $venteDay->total_qt);
     }

     // dd($data);
        /*dd(Vente::select('dateV as dates')
     							->distinct()
     	                        ->where('dateV','>=',Carbon::now()->firstOfMonth()->toDateTimeString())
     	                        ->get());*/
       /* dd(Vente::where('dateV','>=',Carbon::now()->firstOfMonth()->toDateTimeString())
                            	   ->groupBy('dateV')
                            	   ->sum('qt'));*/
    /*$nb = Vente::groupBy('dateV')
                 ->get()
                 ->map(function ($item) {
        return count($item);
    });*/
                 //for ($i =0; $i< $nb ;$i++){
    /*$data->push(Vente::where('dateV','>=',Carbon::now()->firstOfMonth()->toDateTimeString())
                            	   ->groupBy('dateV')
                            	   ->sum('qt'));*/
   /* dd(Vente::all()
                   ->groupBy('dateV')
                   ->sum('qt'));*/

      //for ($i =0; $i< $nb ;$i++){
     /*$data->push(Vente::select(DB::raw('SUM(qt) as total_qt'))
     							
     	                        ->where('dateV','>=',Carbon::now()->firstOfMonth()->toDateTimeString())
     	                        
                            	->groupBy('dateV')
                            	
                            	);*/
    // $datalabel->push(Vente::select('dateV')
    //  							->distinct()
    //  	                        ->where('dateV','>=',Carbon::now()->firstOfMonth()->toDateTimeString())
    //                         	->get()
    //                         	);
	$jours = Vente::select('dateV')
					->distinct()
					->where('dateV','>=',Carbon::now()->firstOfMonth()->toDateTimeString())
					->get();
	// dd($jours);
	$jourAll = array();

	foreach ($jours as $key => $jour) {
		array_push($jourAll, $jour->dateV);
	}

     /*$data->push(Vente::select('dateV')
     	->where('dateV','>=',Carbon::now()->firstOfMonth()->toDateTimeString())
                            	   ->groupBy('dateV')
                            	   ->get()
                            	   ->map(function ($item) {
        
                                            return sum('qt');}
                                          )
                            	);*/


       // elle me donne + q 1 val esq il faut une boucle?
      

      $chart = new NombreVentes;
     // $chart->labels($data->'dateV');// c faux!
      // $chart->labels($datalabel);
      $chart->labels($jourAll);
      // options($options, bool $overwrite = false)
      $chart->dataset('Nombre de ventes', 'bar', $data);
      /*$data = array
				  (
				  array('2019-08-01','2019-08-02','2019-08-03','2019-08-04'),
				  array(23,20,15,13)
				  );
      $chart->dataset('Nombre de ventes', 'bar', $data);*/
      /*$chart->labels(['2019-08-01', 'Two', 'Three', 'Four']);
	  $chart->dataset('My dataset', 'line', [1, 2, 3, 4]);*/
      //$chart->dataset('My dataset 2', 'bar', [4, 3, 2]);
      //return view('ventes.index',compact('chart'));*/
      return view('ventes.index',['chart' => $chart]);

    }

    


}
