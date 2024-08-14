<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Picture;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function show(){
        $blog=Blog::all();
        return $blog->tags;
    }

    public function insert(){
        $data=Blog::create([
            'title'=>'Title 6',
            'description'=>'Lorem ipsum dolor sit amet.',
        ]);
        $data->tags()->create([
            'tag_name'=>'tag 6',
        ]);
        // $data->tags()->attach(5);
    }

    public function content(){
        $blog=Blog::all();
        $picture=Picture::all();
        return view('Dashboard.file',[
            'blog'=>$blog,
            'picture'=>$picture,
        ]);
    }

    public function showblog($id){
        $data=Blog::find($id);
        $tag=$data->tags;
        $alltag=Tag::select('tag_name')->distinct()->get();
        return view('Dashboard.image',['data'=>$data,'tag'=>$tag,'alltag'=>$alltag]);
    }

    public function addtag($id,Request $request){
        $data=Blog::find($id);
        $data->tags()->create([
            'tag_name'=>$request->tag,
        ]);
        return redirect()->back();
    }

    public function addByClick($id,$tag_name){
        $data=Blog::find($id);
        $data->tags()->create([
            'tag_name'=>$tag_name,
        ]);
        return redirect()->back();
    }

   
}
