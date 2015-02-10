<?php namespace Gaceta\Managers;

class SectionManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'title'             => 'required',
            'slug_url'          => '',
            'banner'            => '',
            'banner_url'        => '',
            'body'              => '',
            'meta_description'  => '',
            'published'         => '',
            'authored_by'       => ''
        ];

        return $rules;
    }
}
