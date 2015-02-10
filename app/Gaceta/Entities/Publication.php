<?php
namespace Gaceta\Entities;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Publication extends \Eloquent {

    use SoftDeletingTrait;

    protected $table = 'publications';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'title',
        'number',
        'slug_url',
        'meta_description',
        'body',
        'image_front',
        'pdf_file',
        'published',
        'promoted_front',
        'authored_by'];


}
