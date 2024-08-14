<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    //
    function testImageUpload(Request $request){
        $request->validate([
            'image'=>'required|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        if($request->file('image')){
            $path=$request->file('image')->store('images','public');
            Photo::create(['path'=>$path]);
            return response()->json([
                'status'=>true,
                'message'=>'Image Uploaded Successfully',
                'path'=>$path,
            ],201);
        }
        else{
            return response()->json([
            'status'=>false,
            'message'=>'Image Upload Failed',
        ],204);
        }
        

    }
}
