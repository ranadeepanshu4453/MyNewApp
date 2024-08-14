<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Image;
use App\Models\Person;
use App\Models\Post;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;

class RelationshipController extends Controller
{
    //
    // public function show(){
    //     // $data= Country::with('posts')->get();
    //     // return $data;
    //     // $data=Country::find(1);
    //     // return $data->posts;
    //     $data=Person::all();
    //     return $data;
    // }

    //polymorphic relation (one to one morph relation)

    public function user(){
        $data=User::find(2);
        
        $data->image()->create([
            'url'=>'image1.jpg'
        ]);

    }

    //creating data for post table

    public function post(){
        $data=Post::find(2);
        
        $data->image()->create([
            'url'=>'image1.jpg'
        ]);

    }

    public function show(){
        // $image=User::with('image')->find(1);
        // return $image;

        $data=Post::with('comment')->get();
        return $data;

        
// return view('Dashboard.file',[
//     'data'=>$data,
// ]);
    }

    //one to many relationship 

    public function first(){
        $data=Post::all();
        return $data;
    }

    //add data to tables
    public function add(){
        $data=Video::create([
            'title'=>'title 7',
            'url'=>' image.jpg',
        ]);
        $data->comment()->create([
            'detail'=>'Thirddata',
        ]);

    }

    // content management system

    public function content(){
        $video=Video::get();
        $image=Image::get();

        return view('Dashboard.file',[
            
            'video'=>$video,
            'image'=>$image,
        ]);
    }
    public function video($id){
        $data=Video::find($id);
        
        return view('Dashboard.video',[
            'data'=>$data,
        ]);

    }

    public function image($id){
       
        $data=Image::find($id);
        return view('Dashboard.image',[
            'data'=>$data,
        ]);
    }

    public function addImageComment($id,Request $request){
        dd($request);
        $data=Video::find($id);
        return $data;
    }
    

}
