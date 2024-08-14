<?php

namespace App\Http\Controllers;

use App\Models\Age;
use Illuminate\Http\Request;

class AgeController extends Controller
{
    //
    public function index(){
        $data=Age::all();
        return $data;
    }
    public function insert(){
        $age=Age::create([
            'name'=>'Deepanshu',
            'age'=>23,
        ]);
    }
}
