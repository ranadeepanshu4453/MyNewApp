<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;
    protected $fillable=['title','url'];
    public function tags(){
        return $this->morphToMany(Tag::class,'taggable');
    }
}
