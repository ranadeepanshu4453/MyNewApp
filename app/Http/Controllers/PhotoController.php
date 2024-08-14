<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function upload(Request $request){
        $request->validate([
            'image'=>'required|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        if($request->file('image')){
            $path=$request->file('image')->store('images','public');
            Photo::create(['path'=>$path]);
            return back();
        }
        return 'upload failed';
    }

    public function show(){
        
        $image=Photo::all();
        
        return view('Forms.imageUpload',[
            'images'=>$image,
        ]);
    }
    Public function destroy(){
        Photo::truncate();
        return response()->json([
            'status'=>true,
            'message'=>'Data Deleted Successfully',
        ]);
    }

}
