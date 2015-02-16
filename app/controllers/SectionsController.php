<?php
use Gaceta\Repositories\SectionRepo;
use Gaceta\Repositories\PostRepo;
use Gaceta\Managers\SectionManager;

class SectionsController extends \BaseController {

    protected $sectionRepo, $postRepo;

    public function __construct(SectionRepo $sectionRepo, PostRepo $postRepo)
    {
        $this->sectionRepo 		= $sectionRepo;
        $this->postRepo 		= $postRepo;
    }

    /**
     * Display a listing of the resource.
     * GET /sections
     *
     * @return Response
     */
    public function index()
    {
        $sections = $this->sectionRepo->all();
        return View::make('administrator.sections', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     * GET /sections/create
     *
     * @return Response
     */
    public function create()
    {

        return View::make('administrator.section-create');
    }

    /**
     * Store a newly created resource in storage.
     * POST /sections
     *
     * @return Response
     */
    public function store()
    {
        $section = $this->sectionRepo->newSection();

        $data = Input::all();
        $manager = new SectionManager($section, $data);


        /*
         * Comented for less functionality

        $date = date('Ymd-hm');

        if(Input::file('banner')){
            $file = Input::file('banner');
            $path = $date."_secciones_".$file->getClientOriginalName();
            $file->move("uploads/",$path);

            $section->banner = $path;
        }
        */

        $manager->save();

        $status = 'Success';

        return Redirect::route('admin_sections');
    }

    /**
     * Display the specified resource.
     * GET /sections/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($section_url)
    {
        $section = $this->sectionRepo->findBySlug($section_url);

        if($section == NULL)
            App::abort('404');


        if($section->slug_url == 'galeria-de-fotos')
        {
            $posts = $this->postRepo->getGallery();
            return View::make('gallery', compact('section', 'posts'));
        }

        $posts = $this->postRepo->getListBySection($section->id);
        return View::make('section', compact('section', 'posts'));

    }

    /**
     * Show the form for editing the specified resource.
     * GET /sections/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $section = $this->sectionRepo->find($id);

        return View::make('administrator/section-update', compact('section'));
    }

    /**
     * Update the specified resource in storage.
     * PUT /sections/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $section = $this->sectionRepo->find($id);

        $data = Input::all();


        /*
         * Comented for less functionality

        $date = date('Ymd-hm');

        if(Input::file('banner')){
            $file = Input::file('banner');
            $path = $date."_secciones_".$file->getClientOriginalName();
            $file->move("uploads/",$path);
            $data['banner'] = $path;
        }else{
            $data['banner'] = $data["banner_document"];
        }
        */
        $manager = new SectionManager($section, $data);

        $manager->save();

        //$message = \Lang::success;
        return Redirect::route('admin_sections');
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /sections/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $section = $this->sectionRepo->find($id);
        $section->delete();

        return Redirect::back();
    }

}