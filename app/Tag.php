<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    Protected $fillable = [
        'name',
    ];

    public function posts(){
        return $this -> beLongsToMany(Post::class);
    }
}
