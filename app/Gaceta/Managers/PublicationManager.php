<?php namespace Gaceta\Managers;

class PublicationManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'title'             => 'required',
            'number'            => '',
            'slug_url'          => '',
            'meta_description'  => '',
            'body'              => '',
            'image_front'       => '',
            'pdf_file'          => '',
            'published'         => '',
            'promoted_front'    => '',
            'authored_by'       => ''
        ];

        return $rules;
    }

    public function prepareData($data)
    {
        $data['title'] = strip_tags($data['title']);

        $this->entity->slug_url = \Str::slug($this->entity->publication->title);

        return $data;
    }

}
