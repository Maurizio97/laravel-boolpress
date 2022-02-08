<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'author',
        'content',
        'category_id',
    ];
    
    public function category(){
        return $this -> beLongsTo(Category::class);
    }

    public function tags() {
        return $this -> beLogsToMany(Tag::class);
    }
}
