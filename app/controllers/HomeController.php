<?php
use Gaceta\Repositories\PostRepo;
use Gaceta\Repositories\SectionRepo;


class HomeController extends \BaseController
{

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
		$this->postRepo = $postRepo;
		$this->sectionRepo = $sectionRepo;
	}

	public function admin()
	{
		return View::make('administrator.inicio');
	}
	
	public function index()
	{
		$lastest_posts = $this->postRepo->lastestPost(10);
		$most_views_posts = $this->postRepo->lastestPost(5);

		$investigacion = $this->sectionRepo->findBySlug('investigacion');
		$docencia = $this->sectionRepo->findBySlug('docencia');
		$extension = $this->sectionRepo->findBySlug('extension');
		$gestion = $this->sectionRepo->findBySlug('gestion');

		$investigacion_posts = $this->postRepo->lastestPostBySectionTake($investigacion->id, 2);
		$extension_posts = $this->postRepo->lastestPostBySectionTake($extension->id, 2);
		$gestion_posts = $this->postRepo->lastestPostBySectionTake($gestion->id, 2);
		$docencia_posts = $this->postRepo->lastestPostBySectionTake($docencia->id, 2);

		$last_post = $this->postRepo->lastPost();

		return View::make('home', compact('lastest_posts',
										  	'most_views_posts',
										  	'investigacion',
										  	'extension',
											'gestion',
											'docencia',
											'investigacion_posts',
											'extension_posts',
											'gestion_posts',
											'docencia_posts',
											'last_post'));

	}

	public function search(){
		$data = Input::all();

		$posts = $this->postRepo->search($data);

		return View::make('search', compact('posts'));

	}

	public function mensaje()
	{
		return View::make('mensaje');
	}
}
