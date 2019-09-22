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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');






