<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicament;
class MedicamentController extends Controller
{
    public function newMedicament(){
    	$newMedicament=new Medicament();
    	$newMedicament->nomM="doliprane";
    	$newMedicament->dosage="100 g";
    	$newMedicament->forme="comprimé";
    	$newMedicament->famille="paracetamol";   	
    	$newMedicament->stock_min=10;
    	$newMedicament->remboursable=1;
    	$newMedicament->save();    	
    }

     public function listeMedicaments(){
    	
    	$medicaments=Medicament::all();
        print_r($medicaments);
    } 
}
