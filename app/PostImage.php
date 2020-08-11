<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    public $fillable = ['is_user','desc_image','like_image','path_image'];

    public function photos(){
        return $this->hasMany(PostPhoto::class, 'post_image_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}

