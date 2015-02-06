<?php namespace Gaceta\Entities;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Section extends \Eloquent {

    use SoftDeletingTrait;

    protected $table = 'sections';

    protected $fillable = [
        'title',
        'slug_url',
        'section_id',
        'tipo_unidad',
        'banner',
        'banner_url',
        'type',
        'body',
        'meta_description',
        'published'
    ];

}
