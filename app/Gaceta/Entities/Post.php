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
        'gaceta_number',
        'image',
        'image2',
        'image3',
        'image4',
        'image5',
        'attach_file',
        'published',
        'promoted_front',
        'promoted_section',
        'frontpage',
        'authored_by'];


    public function section(){
        return $this->belongsTo('Gaceta\Entities\Section')->get();

    }
}
