<?php
use Gaceta\Repositories\PostRepo;
use Gaceta\Repositories\SectionRepo;
use Gaceta\Managers\PostManager;


class PostsController extends \BaseController {

    protected $postRepo, $sectionRepo;


    public function __construct(PostRepo $postRepo, SectionRepo $sectionRepo)
    {
        $this->postRepo 		= $postRepo;
        $this->sectionRepo 		= $sectionRepo;
    }

    public function index()
    {
        $posts = $this->postRepo->getList();
        return View::make('administrator.posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $sections  = $this->sectionRepo->getList();


        return View::make('administrator.post-create', compact('sections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $post = $this->postRepo->newPost();

        $data = Input::all();

        $manager = new PostManager($post, $data);

        $manager->save();

        $status = 'Success';

        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $post = $this->postRepo->find($id);

        return Response::json(compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post = $this->postRepo->find($id);
        $post_types = \Lang::get('utils.type_posts');

        return View::make('administrator/post-update', compact('post','post_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $post = $this->postRepo->find($id);

        $data = Input::all();

        $manager = new PostManager($post, $data);

        $manager->save();

        //$message = \Lang::success;
        return Redirect::route('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $post = $this->postRepo->find($id);
        $post->delete();

        return Redirect::back();

    }

}