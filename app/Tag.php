<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name', 'describe'];

    public function posts(){
        return $this->belongsToMany('App\Post',  'post_tag', 'tag_id', 'post_id');
    }
}
