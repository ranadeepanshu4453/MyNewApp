<?php

namespace App\Providers;

use App\Models\Action;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Gate::define('isAdmin',function(User $user){
            return $user->usertype==='admin';
        });
        Gate::define('isLogin',function(User $user){
            return Auth::check();
        });
        Gate::define('seeMessage',function(User $user,Message $message){
           
            return Auth::id()===(int)$message->reciever_id;
        });
        Gate::define('canMessage',function(User $user,Action $action){
            return Auth::id()!=$action->user_id;
        });
    }
}
