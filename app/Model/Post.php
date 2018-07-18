<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Image;
use App\User;
use App\Model\Like;
use App\Model\Category;
class post extends Model
{
    protected $fillable=['category_id','title','img', 'content', 'description','author_firstName','author_lastName', 'author_img','source_url','perma_link','img','active'];



    public function images(){
        return $this->hasMany('App\Image');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function dislikes()
    {
        return $this->hasMany(Like::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
