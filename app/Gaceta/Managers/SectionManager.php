<?php namespace Gaceta\Managers;

class SectionManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'title'             => 'required',
            'slug_url'          => 'required',
            'section_id'        => '',
            'tipo_unidad'       => '',
            'banner'            => '',
            'banner_url'        => '',
            'type'              => '',
            'body'              => '',
            'meta_description'  => '',
            'published'         => ''
        ];

        return $rules;
    }
}
