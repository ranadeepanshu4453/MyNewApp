<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Notifications\WelcomeNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class NotificationController extends Controller
{
    //
    public function index(){
        // $user=User::find(19);
        $user =User::get();
        $post=[
            'title'=>'New Title',
            'slug'=>'post-slug',
        ];
        foreach($user as $users){
            Notification::send($user,new WelcomeNotification($post));

        }


        dd( 'working in laravel Notifcations');
    }

    
}
