<?php

namespace App\Providers;

use App\Notifications\EmailNotification;
use App\Notifications\NotificationInterface;
use App\Services\MyService;
use Illuminate\Support\ServiceProvider;

class MyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //  
        $this->app->bind(NotificationInterface::class,function ($app){
            return New EmailNotification();
        });
        $this->app->bind(MyService::class,function(){
            return new MyService('serviceID::'.random_int(1000,9999));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
