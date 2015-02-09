<?php

namespace Gaceta\Repositories;

use Gaceta\Entities\Section;

class SectionRepo extends BaseRepo {

    public function getModel()
    {
        return new Section;
    }

    public function newPanelist()
    {
        $section = new Section();
        return $section;
    }

    public function getList()
    {
        $sections = Section::lists('title','id');
        return $sections;
    }
}
