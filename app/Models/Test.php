<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    protected $fillable=['meta_data'];

    //if we don't use this super global variable then laravel will read meta data as a normal text from sql
    protected $casts=[
        'meta_data'=>'json',
    ];
}
