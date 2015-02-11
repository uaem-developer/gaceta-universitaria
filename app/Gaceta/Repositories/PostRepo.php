<?php

namespace Gaceta\Repositories;

use Gaceta\Entities\Post;

class PostRepo extends BaseRepo {

    public function getModel()
    {
        return new Post;
    }

    public function newPost()
    {
        $post = new Post();
        return $post;
    }

    public function getList()
    {
        return Post::all();
    }

    public function lastestPostBySection($section_id)
    {
        return Post::where('section_id', '=', $section_id)->get();
    }
}

