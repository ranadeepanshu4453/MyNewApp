<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
    use HasFactory;
    protected $gaurded=[];

    public function setEmailAttribute($value){
        $this->attributes['email']=strtolower($value);

    }
    public function setNameAttribute($value){
        $this->attributes['name']=strtolower($value);

    }

    public function getNameAttribute($value){
        return ucfirst($value);

    }
}
