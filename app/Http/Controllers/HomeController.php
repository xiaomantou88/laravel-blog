<?php namespace App\Http\Controllers;

use App\Article;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
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
	public function index()
	{
		$articles = Article::take(5)->get();
		return view('home',['articleArr'=>$articles]);
	}

	/**
	 * 博文详情页面
	 * @return Response
	 */
	public function article($id)
	{
		$article = Article::find($id);
		return view('article',['article'=>$article]);
	}

	/**
	 * 关于页面
	 * @return [type] [description]
	 */
	public function about()
	{
		$article = Article::find(2);
		return view('about',['article'=>$article]);
	}

}
