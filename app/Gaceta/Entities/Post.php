<?php
namespace Gaceta\Entities;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Post extends \Eloquent {

    use SoftDeletingTrait;

    protected $table = 'posts';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'type',
        'section_id',
        'tipo_unidad_id',
        'unidad_academica_id',
        'title',
        'banner',
        'banner_url',
        'order_num',
        'slug_url',
        'meta_description',
        'body',
        'icon',
        'image',
        'image2',
        'attach_file',
        'published',
        'promoted_front'];


}
