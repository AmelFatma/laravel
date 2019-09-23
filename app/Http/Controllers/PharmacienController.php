<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pharmacien;


class PharmacienController extends Controller
{
     
 
protected function create(array $data)
{
    return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => bcrypt($data['password']),
        'isAdmin' => $data['isAdmin'],
        'prenom' => $data['prenom'],
        'dateNaissance' => $data['dateNaissance'],
        'tel' => $data['tel'],
        'login' => $data['login'],
        'photo' => $data['photo'],
    ]);
}
    protected function validator(array $data)
{
    return Validator::make($data, [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
        'isAdmin' => 'required|in:admin,agent', //validate role input
    ]);
}

     public function listePharmaciens(){
    	
    	$pharmaciens=Pharmacien::all();
        //print_r($pharmaciens);
                return view('pharmacien.index', ['users'=>$users]);

    } 

}
