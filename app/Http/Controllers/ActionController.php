<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActionController extends Controller
{
    public function track(){
        $data=Action::orderBy('id','desc')->get();
        
        return view('Dashboard.track',[
            'data'=>$data,
        ]);
    }

    public function message($id){
        return view('Dashboard.message',['id'=>$id]);
    }

    public function sendMessage(Request $request,$id){
        $msg=Message::create([
            'sender_id'=>Auth::id(),
            'reciever_id'=>$id,
            'message'=>$request->msg,
        ]);
        return redirect()->back()->with('message','Message Sent Successfully');

    }

    public function notify(){
        $msg=Message::get();
        $user=User::get();
        return view('Dashboard.notification',['msg'=>$msg,'user'=>$user]);
    }
    
}
