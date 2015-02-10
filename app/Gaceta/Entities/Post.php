<?php
namespace Gaceta\Entities;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Post extends \Eloquent {

    use SoftDeletingTrait;

    protected $table = 'posts';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'section_id',
        'title',
        'order_num',
        'slug_url',
        'meta_description',
        'body',
        'icon',
        'image',
        'image2',
        'attach_file',
        'published',
        'promoted_front',
        'authored_by'];


}
