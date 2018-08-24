<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    //
	public function index() {
		
		$articles = Article::select('headline', 'savedate', 'CreateDate', 'AspName')
					->where([
						['state', '=', 4],
						['savedate', '>', '20180430'],
					])
					->orderBy('savedate', 'desc')
					->get();
		//dd($articles);
		
		return view('articles.index', compact('articles'));
		
	}
	
	public function show($id) {
		
		$article = Article::find($id);
		//dd($article);
		return view('articles.edit', compact('article'));
	}
	
	public function create() {
		
		return view('articles.create');
	}
	
	public function store() {
		
		dd(request('username'));
		
		// create a new article using the request data
		
		// Save it to the DB
		
		// And then redirect to the home page
		
	}
	
}
