<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content'];

    public function likes()
    {
        return $this->hasMany('App\Like', 'post_id');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag',  'post_tag', 'post_id', 'tag_id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function setTitleAttribute($value)
    {
         $this->attributes['title'] = strtoupper($value);
    }

    public function getTitleAttribute($value)
    {
        return strtolower($value);
    }
}