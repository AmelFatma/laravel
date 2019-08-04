<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pharmacien;


class PharmacienController extends Controller
{
     public function newPharmacien(){
    	$newPharmacien=new Pharmacien();
    	$newPharmacien->nomP="BOUKLI";
    	$newPharmacien->prenomP="Nadia";
    	$newPharmacien->dateNaissance="10-09-1962";
    	$newPharmacien->telP="0555142563";
    	$newPharmacien->emailP="nadia@gmail.com";
    	$newPharmacien->login="nad";
    	$newPharmacien->password="b";
    	$newPharmacien->isAdmin=0;
    	$newPharmacien->save();    	
    }

     public function listePharmaciens(){
    	
    	$pharmaciens=Pharmacien::all();
        //print_r($pharmaciens);
                return view('back.index', ['pharmaciens'=>$pharmaciens]);

    } 

}
