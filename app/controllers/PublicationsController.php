<?php
use Gaceta\Repositories\PublicationRepo;
use Gaceta\Repositories\SectionRepo;
use Gaceta\Managers\PublicationManager;


class PublicationsController extends \BaseController {

    protected $publicationRepo, $sectionRepo;


    public function __construct(PublicationRepo $publicationRepo, SectionRepo $sectionRepo)
    {
        $this->publicationRepo  = $publicationRepo;
        $this->sectionRepo 		= $sectionRepo;
    }

    public function index()
    {
        $publications = $this->publicationRepo->getList();
        return View::make('administrator.publications', compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('administrator.publication-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $publication = $this->publicationRepo->newPost();

        $data = Input::all();

        $manager = new PublicationManager($publication, $data);

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
        $post = $this->publicationRepo->find($id);

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
        $publication = $this->publicationRepo->find($id);

        return View::make('administrator/publication-update', compact('publication'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $publication = $this->publicationRepo->find($id);

        $data = Input::all();

        $manager = new PublicationManager($publication, $data);

        $manager->save();

        //$message = \Lang::success;
        return Redirect::route('admin_publications');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $publication = $this->publicationRepo->find($id);
        $publication->delete();

        return Redirect::back();
    }

}