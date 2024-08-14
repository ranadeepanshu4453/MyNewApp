<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['url'];
    


    public function imageable(){
        //we have to tell the file that it is the morph file
        return $this->morphTo();

    }
}
