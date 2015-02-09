<?php namespace Gaceta\Managers;

class PostManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'section_id'           => 'required',
            'title'             => 'required',
            'order_num'         => '',
            'slug_url'          => '',
            'meta_description'  => '',
            'body'              => '',
            'icon'              => '',
            'image'             => '',
            'image2'            => '',
            'attach_file'       => '',
            'published'         => '',
            'promoted_front'    => ''
        ];

        return $rules;
    }

}
