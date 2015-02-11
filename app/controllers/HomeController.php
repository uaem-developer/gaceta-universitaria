<?php
use Gaceta\Repositories\PostRepo;
use Gaceta\Repositories\SectionRepo;


class HomeController extends \BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	protected $postRepo, $sectionRepo;


	public function __construct(PostRepo $postRepo, SectionRepo $sectionRepo)
	{
		$this->postRepo 		= $postRepo;
		$this->sectionRepo 		= $sectionRepo;
	}

	public function index()
	{


		return View::make('home');

	}

}
