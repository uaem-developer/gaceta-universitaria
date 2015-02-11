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
            'gaceta_number'     => '',
            'image'             => '',
            'image2'            => '',
            'image3'            => '',
            'image4'            => '',
            'image5'            => '',
            'attach_file'       => '',
            'published'         => '',
            'promoted_front'    => '',
            'authored_by'    => ''
        ];

        return $rules;
    }

    public function prepareData($data)
    {
        $data['title'] = strip_tags($data['title']);

        $data['slug_url'] = \Str::slug($data['title']);

        if ( empty($data['meta_description']) && ! empty($data['meta_description']))
        {
            $meta_description = strip_tags($this->entity->body);

            $data['meta_description'] = substr($meta_description, 0, 160) . '...';
        }

        return $data;
    }

}
