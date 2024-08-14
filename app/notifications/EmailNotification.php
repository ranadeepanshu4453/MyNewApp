<?php

namespace App\Notifications;

class EmailNotification implements NotificationInterface{
    public function send($recipient,$message){
        return 'Email sent to::'. $recipient.' Message::'.$message;
    }
}