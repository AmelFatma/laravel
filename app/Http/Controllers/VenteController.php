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

     $data = collect([]);
     $datalabel = collect([]);
     /*$data->push(Vente::where('dateV','>=',Carbon::now()->firstOfMonth()->toDateTimeString())
                            	   ->groupBy('dateV')
                            	   ->sum('qt'));*/


     $data->push(Vente::select(DB::raw('SUM(qt) as total_qt'))
     							
     	                        ->where('dateV','>=',Carbon::now()->firstOfMonth()->toDateTimeString())
     	                        
                            	->groupBy('dateV')
                            	->get()
                            	
                            	);
    /* $datalabel->push(Vente::select('dateV')
     							
     	                        ->where('dateV','>=',Carbon::now()->firstOfMonth()->toDateTimeString())
     	                        
                            	->
                            	
                            	);*/

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
       $chart->labels($data->keys());
      // options($options, bool $overwrite = false)
      $chart->dataset('Nombre de ventes', 'bar', $data);
      /*$data = array
				  (
				  array('2019-08-01','2019-08-02','2019-08-03','2019-08-04'),
				  array(23,20,15,13)
				  );
      $chart->dataset('Nombre de ventes', 'bar', $data);*/
      /*$chart->labels(['2019-08-01', 'Two', 'Three', 'Four']);
	  $chart->dataset('My dataset', 'line', [1, 2, 3, 4]);
      $chart->dataset('My dataset 2', 'line', [4, 3, 2, 1]);
      //return view('ventes.index',compact('chart'));*/
      return view('ventes.index',['chart' => $chart]);

    }

    


}
