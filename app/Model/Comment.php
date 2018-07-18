<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
class comment extends Model
{
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    // Good Article
    // https://laracasts.com/discuss/channels/eloquent/trying-to-get-a-post-with-comments-and-user-name

}
