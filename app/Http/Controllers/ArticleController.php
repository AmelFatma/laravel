<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    //
    public function articles(){
    	echo"affichage des articles";
    }
    public function article($id){
    	echo"affichage de l'article: ".$id;
    }
    public function newArticle(){
    	$newArticle=new Article();
    	$newArticle->name="stylo";
    	$newArticle->color="rouge";
    	$newArticle->type="stylo à bille";
    	$newArticle->save();
    }
    public function listeArticles(){
    	$articles=Article::all();
    	//print_r($articles);
    	return view('articles',['articles'=>$articles]);
    }
    public function create(){
    	return view('article.create');
    }
    public function store(Request $request){
    	$article = new Article();
    	$article->name = $request->input('name');//le 'name' ta3 input
    	$article->color = $request->input('c');
    	$article->type = $request->input('t');
    	$article->save();
    	return redirect('articles');

    }
    public function index(){
    	$listArticle = Article::all();
    	return view('article.index', ['articles' => $listArticle]);
    }
     public function edit($id){
    	$article = Article::find($id);
    	return view('article.edit', ['article'=>$article]);
    }
    public function update(Request $request, $id){
    	$article = Article::find($id);
    	$article->name = $request->input('name');
    	$article->color = $request->input('c');
    	$article->type = $request->input('t');
    	$article->save();
    	return redirect('articles');    	
    }
      public function destroy($id){
    	$article = Article::find($id);
    	$article->delete();
    	return redirect('articles');
    } 


}
