<?php
use Gaceta\Repositories\SectionRepo;
use Gaceta\Managers\SectionManager;

class SectionsController extends \BaseController {


    public function __construct(SectionRepo $sectionRepo)
    {
        $this->sectionRepo 		= $sectionRepo;
    }

    /**
     * Display a listing of the resource.
     * GET /sections
     *
     * @return Response
     */
    public function index()
    {
        $sections = $this->$sectionRepo->getList();
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
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /sections
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /sections/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
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
        //
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
        //
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
        //
    }

}