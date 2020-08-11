<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PostImage;
class PostPhoto extends Model
{
    protected $guarded =  [];
    protected $table = "post_photos";
    public function postImage(){
        return $this->belongsTo(PostImage::class, 'post_image_id', 'id');
    }
}
