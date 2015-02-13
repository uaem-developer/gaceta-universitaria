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

    public function prepareData($data)
    {
        $data['title'] = strip_tags($data['title']);
        //$data['slug_url'] = \Str::slug($data['title']);

        if ( empty($data['meta_description']))
        {
            $meta_description = strip_tags($this->entity->body);

            $data['meta_description'] = substr($meta_description, 0, 160) . '...';
        }

        return $data;
    }
}
