<?php namespace Gaceta\Managers;

class PostManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'type'              => 'required',
            'section'           => 'required',
            'tipo_unidad'       => 'required',
            'unidad_academica'  => 'required',
            'title'             => 'required',
            'banner'            => 'required',
            'banner_url'        => 'required',
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
