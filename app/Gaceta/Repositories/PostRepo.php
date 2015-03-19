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

    public function getListBySection($section_id)
    {
        return Post::where('section_id', '=', $section_id)->orderBy('order_num', 'DESC')->orderBy('created_at', 'DESC')->paginate(20);
    }

    public function getGallery()
    {
        return Post::where('image', '!=', '')->orderBy('order_num', 'DESC')->orderBy('created_at', 'DESC')->paginate(20);
    }

    public function lastestPostBySection($section_id)
    {
        return Post::where('section_id', '=', $section_id)->take(2)->orderBy('promoted_section', 'DESC')->orderBy('order_num', 'DESC')->orderBy('created_at', 'DESC')->get();
    }

    public function lastestPostBySectionTake($section_id, $take = 2)
    {
        return Post::where('section_id', '=', $section_id)->orderBy('promoted_section', 'DESC')->orderBy('order_num', 'DESC')->orderBy('created_at', 'DESC')->take($take)->get();
    }

    public function lastestPost($take = 10)
    {
        return Post::take($take)->orderBy('promoted_front', 'DESC')->orderBy('order_num', 'DESC')->orderBy('created_at', 'DESC')->get();
    }

    public function lastPost()
    {
        return Post::orderBy('frontpage', 'DESC')->orderBy('promoted_front', 'DESC')->orderBy('order_num', 'DESC')->orderBy('created_at', 'DESC')->first();
    }

    public function search($data = array())
    {
        if(! empty($data['author']))
            $author = "['authored_by', 'LIKE', '%".$data['author']."%']";
        else
            $author = "";

        if(! empty($data['date']))
            $date = "['created_at', '=', '".$data['date']."']";
        else
            $date = "";

        if(! empty($data['section']))
            $section = ['&&', 'section_id', '=', $data['section']];
        else
            $section = "";

        return Post::where('title', 'LIKE', '%'.$data['title'].'%' . $section)->get();
    }
}

