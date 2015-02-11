<?php

namespace Gaceta\Repositories;

use Gaceta\Entities\Section;

class SectionRepo extends BaseRepo {

    public function getModel()
    {
        return new Section;
    }

    public function newSection()
    {
        $section = new Section();
        return $section;
    }

    public function getList()
    {
        $sections = Section::lists('title','id');
        return $sections;
    }

    public function all()
    {
        return Section::all();
    }

    public function findBySlug($slug)
    {
        return Section::where('slug_url', '=', $slug)->first();
    }

}
