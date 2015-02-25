<?php
use Gaceta\Repositories\PostRepo;
use Gaceta\Repositories\SectionRepo;
use Gaceta\Managers\PostManager;
use Gaceta\Components\ImageResizer;


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

        $gaceta_numbers = \Lang::get('utils.gaceta_numbers');

        return View::make('administrator.post-create', compact('sections','gaceta_numbers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $post = $this->postRepo->newPost();

        $image = new ImageResizer();

        $data = Input::all();

        if(Input::file('image')){
            $file = Input::file('image');
            $data['image'] = $image->processImage($file);
        }

        if(Input::file('image2')){
            $file = Input::file('image2');
            $data['image2'] = $image->processImage($file);
        }

        if(Input::file('image3')){
            $file = Input::file('image3');
            $data['image3'] = $image->processImage($file);
        }

        if(Input::file('image4')){
            $file = Input::file('image4');
            $data['image4'] = $image->processImage($file);
        }

        if(Input::file('image5')){
            $file = Input::file('image5');
            $data['image5'] = $image->processImage($file);
        }

        if(Input::file('attach_file')){
            $file = Input::file('attach_file');
            $path = \Str::slug($file->getClientOriginalName());
            $file->move("uploads/posts/",$path);
            $data['attach_file'] = $path;
        }

        $manager = new PostManager($post, $data);

        $manager->save();

        $status = 'Success';

        return Redirect::route('admin_posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug_section = 'undefined', $slug_post  = 'undefined', $id)
    {
        $post = $this->postRepo->find($id);

        $section = $this->sectionRepo->findBySlug($slug_section);

        $lastest_posts = $this->postRepo->lastestPostBySection($section->id);

        \Event::fire('posts.views', $post);

        return View::make('post', compact('post', 'section', 'lastest_posts'));
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
        $gaceta_numbers = \Lang::get('utils.gaceta_numbers');
        $sections  = $this->sectionRepo->getList();

        return View::make('administrator/post-update', compact('post','sections','gaceta_numbers'));
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

        $image = new ImageResizer();

        $data = Input::all();

        if(Input::file('image')){
            $file = Input::file('image');
            $data['image'] = $image->processImage($file);
        }else{
            $data['image'] = $data["image_document"];
        }

        if(Input::file('image2')){
            $file = Input::file('image2');
            $data['image2'] = $image->processImage($file);
        }else{
            $data['image2'] = $data["image2_document"];
        }

        if(Input::file('image3')){
            $file = Input::file('image3');
            $data['image3'] = $image->processImage($file);
        }else{
            $data['image3'] = $data["image3_document"];
        }

        if(Input::file('image4')){
            $file = Input::file('image4');
            $data['image4'] = $image->processImage($file);
        }else{
            $data['image4'] = $data["image4_document"];
        }

        if(Input::file('image5')){
            $file = Input::file('image5');
            $data['image5'] = $image->processImage($file);
        }else{
            $data['image5'] = $data["image5_document"];
        }

        if(Input::file('attach_file')){
            $file = Input::file('attach_file');
            $path = \Str::slug($file->getClientOriginalName());
            $file->move("uploads/posts/",$path);
            $data['attach_file'] = $path;
        }else{
            $data['attach_file'] = $data["attach_file_document"];
        }

        $manager = new PostManager($post, $data);

        $manager->save();

        //$message = \Lang::success;
        return Redirect::route('admin_posts');
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