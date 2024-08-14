<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\Demo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Notifications\UserFollowNotification;
use App\Notifications\WelcomeNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class EmailController extends Controller
{
    //
    function fluentString(User $id){

        $str='we are learning fluent strings';
        $a=Str::ucfirst($str); //convert first letter of word to upper case
        $b=Str::replaceFirst('We','Now We',$a); //replace first word with another word
        $c=Str::camel($b); // convert string to camel case notation
        $data=User::all();
        return $id;
    }

    function show(){
        $obj=Demo::all();
        return view('demo',[
            'data'=>$obj,
        ]);

    }

    function sendmail(){
        $toEmail='rajputg5588@gmail.com';
        $message='hello, welcome new user';
        $subject='Email From laravel';
        $reponse=Mail::to($toEmail)->send(new WelcomeMail($message,$subject));
        dd($reponse);
    }


    //email through notification 
    function showEmail(){
        $user=User::get();

        return view('email.sendemail',['user'=>$user]);
    }
    function sendEmail(){
        
    }
    function showBroadcast(){
        return view('email.broadcast');
    }
    function sendBroadcast(Request $request){
        $users=User::all();
        
        $post=[
            'title'=>'New Message',
            'message'=>$request->msg,
            
        ];
        foreach($users as $user){
            // Notification::send($user,new WelcomeNotification($post));
            $user->notify(new WelcomeNotification($post));
        }
        return redirect()->back()->with('message','Operation Successful');
    }

    function follow(){
        $user=User::all();
        return view('mail.follow',['user'=>$user]);
    }

    function notify($id){
        $user=User::find($id);
        
        if(auth()->user()){

            $user->notify(new UserFollowNotification(auth()->user()));
        }
        return redirect()->back();

    }
    function mardasread($id){
        if($id){
            auth()->user()->notifications->where('id',$id)->markasread();
        }
        return back();
    }
    function unread($id){
        auth()->user()->notifications->where('id',$id)->markasunread();
        return back();
    }
}
