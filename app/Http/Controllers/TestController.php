<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function add(){

        //method 1
        // $test=new Test();
        // $test->meta_data=[
        //     'name'=>'Deepanshu Chauhan',
        //     'email'=>'abc@gmail.com',
        //     'number'=>'7898564522',
        // ];
        // $test->save();

        //method 2
        $test=Test::create([
            'meta_data'=>[
                'name'=>'Abhishek',
                'email'=>'A@gmail.com',
                'number'=>'8747422356',
                'address'=>[
                    'state'=>'Haryana',
                    'city'=>'Burj Saheed',
                    'pincode'=>247001,
                ]

            ]
        ]);

    }
    public function metadata(){
        // $data=Test::find(3);
        // return $data->meta_data['address']['state'];

        //arrange or sort the data using orderby function
        $data=Test::orderBy('meta_data->name')->get();
        return $data;
    }
}
