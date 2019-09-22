<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//lien url= {{ route('admin_contact_index') }}


Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
    Route::get('/login/pharmacien', 'Auth\LoginController@showPharmacienLoginForm');

    Route::post('/login/admin', 'Auth\LoginController@adminLogin');
    Route::post('/login/pharmacien', 'Auth\LoginController@pharmacienLogin');
    

    Route::view('/home', 'home')->middleware('auth');
    Route::view('/admin', 'admin');
    Route::view('/pharmacien', 'pharmacien');


Route::get('/v',function(){
    return view('vue1');
});

Route::get('/v/{name}/id/{id}',function($name,$id){
    echo"contact name:".$name;
    echo"<br> contact id:".$id;
})->where(['name'=>'[a-zA-Z]+','id'=>'[0-9]+']);


Route::get('/accueil', function () {
    return view('accueil');
});



Route::get('/contact', function () {
  Mapper::map(
    34.9017546,
    -1.3522546,

[

'zoom' => 16 ,
'draggable' => true,
'marker' => '203 Fake St. Mountain View, San Francisco, California, USA',
'evenAfterLoad' => 'circleListener(map[0].shapes[0].circle_0);'
]
    );

 return view('contact');
});


Route::post('/contact', [
'uses' =>  'ContactController@store',
'as' => 'contact.store'
]);

Route::get('/admin-contact', 'ContactController@adminIndex')->name('admin_contact_index');
Route::delete('/contact', 'ContactController@destroy')->name('admin_contact_destroy');



Route::get('/about', function () {
    return view('about');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/shop-single', function () {
    return view('shop-single');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/thankyou', function () {
    return view('thankyou');
});

<<<<<<< HEAD
Auth::routes();
=======

Route::prefix('admin')->namespace('Back')->group(function () {
    Route::name('admin')->get('/', 'AdminController@index');
    
});

Route::get('/addpharmacien/','PharmacienController@newPharmacien');

Route::get('/listepharmaciens/','PharmacienController@listePharmaciens');
>>>>>>> cd2ac1690ad4cae786b1e7c2842488b6d73b0de9

Route::get('/home', 'HomeController@index')->name('home');



<<<<<<< HEAD
=======
Route::get('/listemedicaments/','MedicamentController@listeMedicaments');
 
>>>>>>> cd2ac1690ad4cae786b1e7c2842488b6d73b0de9

Route::get('/ChiffreAffaire', 'VenteController@index1');
Route::get('/nbVentes', 'VenteController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


