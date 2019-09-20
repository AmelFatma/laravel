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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/v',function(){
	return view('vue1');
});

Route::get('/v/{name}/id/{id}',function($name,$id){
	echo"contact name:".$name;
	echo"<br> contact id:".$id;
})->where(['name'=>'[a-zA-Z]+','id'=>'[0-9]+']);

Route::get('/articles','ArticleController@articles');

Route::get('/article/{id}','ArticleController@article');

Route::get('/addarticle/','ArticleController@newArticle');

Route::get('/listearticles/','ArticleController@listeArticles');

Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/contact', function () {
    return view('contact');
});

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
    return view('checkoutt');
});

Route::get('/thankyou', function () {
    return view('thankyou');
});

Route::get('articles/create', 'ArticleController@create');

Route::post('articles', 'ArticleController@store');

Route::get('articles', 'ArticleController@index');

Route::get('articles/{id}/edit', 'ArticleController@edit');

Route::put('articles/{id}', 'ArticleController@update');

Route::delete('articles/{id}', 'ArticleController@destroy');

Route::prefix('admin')->namespace('Back')->group(function () {
    Route::name('admin')->get('/', 'AdminController@index');
    
});

Route::get('/addpharmacien/','PharmacienController@newPharmacien');

Route::get('/listepharmaciens/','PharmacienController@listePharmaciens');

Route::get('/addfournisseur/','FournisseurController@newFournisseur');

Route::get('/listefournisseurs/','FournisseurController@listeFournisseurs');

Route::get('/addmedicament/','MedicamentController@newMedicament');

Route::get('/listemedicaments/','MedicamentController@listeMedicaments');
 

Route::get('/ChiffreAffaire', 'VenteController@index1');
Route::get('/nbVentes', 'VenteController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
