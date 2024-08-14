<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use App\Services\MyService;

class UserController extends Controller
{
    //
    
    function showHasOneThrough(){
        $data=User::with('companyName')->with('phoneNumber')->get();
        return $data; 
    }

    function showHasOneOfMany(){
        // $latest=Customer::with('latestOrder')->get();
        // $oldest=Customer::with('oldestOrder')->get();
        //for particular customer with single record
        $latest=Customer::with('latestOrder')->find(1);   

        return $latest;
    }

    public function orders(){
        $customers=Customer::with('orders')->get();
        return $customers;
    }



    //testing service provider
    
}
