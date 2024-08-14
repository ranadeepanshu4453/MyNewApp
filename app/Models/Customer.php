<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function latestOrder(){
        return $this->hasOne(Order::class)->latestOfMany();
    }
    public function oldestOrder(){
        return $this->hasOne(Order::class)->oldestOfMany();
    }
    public function orders(){
        return $this->hasMany(Order::class);
    }
}
