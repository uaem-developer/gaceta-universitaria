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
        return Post::where('section_id', '=', $section_id)->take(3)->get();
    }

    public function lastestPostBySectionTake($section_id, $take = 2)
    {
        return Post::where('section_id', '=', $section_id)->take($take)->get();
    }

    public function lastestPost($take = 10)
    {
        return Post::take($take)->get();
    }

    public function lastPost()
    {
        return Post::orderBy('created_at', 'desc')->first();
    }
}

