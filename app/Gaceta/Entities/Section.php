<?php namespace Gaceta\Entities;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Section extends \Eloquent {

    use SoftDeletingTrait;

    protected $table = 'sections';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title',
        'slug_url',
        'banner',
        'banner_url',
        'body',
        'meta_description',
        'published',
        'authored_by'
    ];

    public function posts()
    {
        return  $this->hasMany('Gaceta\Entities\Post');
    }

}
