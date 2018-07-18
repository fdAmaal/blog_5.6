<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
  protected $fillable=['name','img','active'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}
