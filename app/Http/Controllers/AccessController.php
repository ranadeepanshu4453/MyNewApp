<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\Action;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AccessController extends Controller
{
    //
    function register(Request $request) {
       $otp=random_int(1000,9999);
       
       $obj= new User();
       $obj->name=$request->name;
       $obj->email=$request->email;
       $obj->number=$request->number;
       $obj->password=Hash::make($request->password);
       $obj->otp=$otp;

       if($obj->save()){
         Mail::to($request->email)->send(new WelcomeMail("this is your otp",$otp));
        return redirect()->route('lg');
       }else{
        return redirect()->back()->with('message','Operation failed');
       }

    }

    function login(Request $request) {
        
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        if (Auth::attempt([
            'email' => $data['email'], 
            'password' => $data['password']
        ])) {

            //creating api for testing
            
            //
            $action=Action::create([
                'user_type'=>Auth::user()->usertype,
                'action'=>'LogIn',
                'user_id'=>Auth::id(),
            ]);
            // if(Auth::user()->usertype==='other'){
            //     return redirect()->route('other')->with('message','||welcome||');
            // }
            return redirect()->route('db')->with('success', 'Log In Successful');
        }
    
        return redirect()->back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    function logout(){
        $action=Action::create([
            'user_type'=>Auth::user()->usertype,
            'action'=>'LogOut',
        ]);
        Auth::logout();
        
        return redirect()->route('main');
    }
    
    
}
