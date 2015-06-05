<?php namespace App\Http\Controllers;

use App\Article;

class AdminController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| 管理后台
	|--------------------------------------------------------------------------

	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		//$articles = Article::take(5)->get();
		return view('admin.base');
	}


	public function getArticle()
	{
		return view('admin.article');
	}

	public function getTag()
	{
		return view('admin.tag');
	}

	public function getCategory()
	{
		return view('admin.category');
	}


}
