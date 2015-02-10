<?php

namespace Gaceta\Repositories;

use Gaceta\Entities\Publication;

class PublicationRepo extends BaseRepo {

    public function getModel()
    {
        return new Publication;
    }

    public function newPost()
    {
        $publication = new Publication();
        return $publication;
    }

    public function getList()
    {
        return Publication::all();
    }
}

