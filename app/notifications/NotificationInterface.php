<?php

namespace App\Notifications;

interface NotificationInterface{
    public function send($recipient,$message);

}