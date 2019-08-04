<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fournisseur;
class FournisseurController extends Controller
{
     public function newFournisseur(){
    	$newFournisseur=new Fournisseur();
    	$newFournisseur->nomF="BOUKLI";
    	$newFournisseur->adresse="tlemcen";
    	$newFournisseur->telF="0555142563";
    	$newFournisseur->emailF="nadia@gmail.com";
    	$newFournisseur->save();    	
    }

     public function listeFournisseurs(){
    	
    	$fournisseurs=Fournisseur::all();
        print_r($fournisseurs);
    } 


}
