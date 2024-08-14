<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title','description'];
    //we have given name of function as image bcz in future we can remember that it has relation with image table;
    public function image(){
        return $this->morphOne(Image::class,'imageable');

    }

    //one to many relationship
    public function comment(){
        return $this->morphMany(Comment::class,'commentable');
    }
    
}
