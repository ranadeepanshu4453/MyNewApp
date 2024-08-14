<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Picture;
use App\Models\Tag;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    //
    public function insert(){
        $data=Picture::create([
            'title'=>'Title 6',
            'url'=>'url 6',
        ]);
        $data->tags()->create([
            'tag_name'=>'tag 6',
        ]);
    }

    public function showpicture($id){
        $data=Picture::find($id);
        $tag=$data->tags;
        $alltag=Tag::select('tag_name')->distinct()->get();
        return view('Dashboard.video',['data'=>$data,'tag'=>$tag,'alltag'=>$alltag]);
    }

    public function addtag($id,Request $request){
        $data=Picture::find($id);
        $data->tags()->create([
            'tag_name'=>$request->tag,
        ]);
        return redirect()->back();
    }
    public function addByClick($id,$tag_name){
        $data=Picture::find($id);
        $data->tags()->create([
            'tag_name'=>$tag_name,
        ]);
        return redirect()->back();
    }

}
