<?php

namespace App\Http\Controllers;

use App\Notifications\NotificationInterface;
use Illuminate\Http\Request;

class MyServiceController extends Controller
{
    //
    protected $notification;
    public function __construct(NotificationInterface $notification){
        $this->notification=$notification;
    }
    public function sendNotification(){
        $recipient='rajputg5588@gmail.com';
        $message='This is testing notification';
        $result=$this->notification->send($recipient,$message);
        return response()->json([
            'message'=>$result,
        ]);
    }
}
