<?php

use App\Http\Controllers\AccessController;
use App\Http\Controllers\ActionController;
use App\Http\Controllers\AgeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\MyServiceController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\RelationshipController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\Demo;
use App\Services\MyService;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('newwelcome');
})->name('main');

Route::view('NewRegister','Forms.register')->name('rj');
Route::view('Newlogin','Forms.login')->name('lg');
Route::post('registerform',[AccessController::class,'register']);
Route::post('loginform',[AccessController::class,'login']);
Route::get('logout',[AccessController::class,'logout'])->name('logout');
Route::view('dashboard','Dashboard.dashboard')->name('db');

Route::view('demo','demo')->name('demo');

Route::get('fluent/{id:name}',[EmailController::class,'fluentString']);
Route::get('showdata',[EmailController::class,'show']);


//hasOneThrough Relationship
ROute::get('hasOneThrough',[UserController::class,'showHasOneThrough']);
//hasOneOfMany Relationship
Route::get('hasOneOfMany',[UserController::class,'showHasOneOfMany']);
Route::get('orders',[UserController::class,'orders']);

//Has Many through relationship
//not working
// Route::get('hasManyThrough',[RelationshipController::class,'show']);

//
Route::get('morphOneToOne',[RelationshipController::class,'user']);
Route::get('PostOneToOne',[RelationshipController::class,'post']);
Route::get('show',[RelationshipController::class,'show']);


//one to many relationship 
Route::get('first',[RelationshipController::class,'first']);

Route::get('add',[RelationshipController::class,'add']);

//content management system

// Route::get('content',[RelationshipController::class,'content'])->name('content');
Route::get('video/{id}',[RelationshipController::class,'video'])->name('video');
Route::get('image/{id}',[RelationshipController::class,'image'])->name('image');

Route::post('addVideoComment/{id}',[RelationshipController::class,'addVideoComment']);
Route::post('addImageComment/{id}',[RelationshipController::class,'addImageComment']);


//Many to Many polymorphic relations

Route::get('showMany',[BlogController::class,'show']);
Route::get('insert',[BlogController::class,'insert']);
Route::get('content',[BlogController::class,'content'])->name('content');
Route::get('showBlog/{id}',[BlogController::class,'showblog'])->name('blog');
Route::post('addTag/{id}',[BlogController::class,'addtag']);
Route::get('addByClick/{id}/{tag_name}',[BlogController::class,'addByClick'])->name('addByClick');

Route::get('insertPicture',[PictureController::class,'insert']);
Route::get('showPicture/{id}',[PictureController::class,'showpicture'])->name('picture');
Route::post('addTagVideo/{id}',[PictureController::class,'addtag']);
Route::get('addByClickPicture/{id}/{tag_name}',[PictureController::class,'addByClick'])->name('addByClickPicture');

//creating and fetching meta data in json format

Route::get('metadata',[TestController::class,'metadata'])->middleware(CheckAge::class);
Route::get('addData',[TestController::class,'add']);


//service provider
// Route::get('service',[UserController::class,'service']);


//new code
//working with middleware
// Route::get('age',[AgeController::class,'index'])->middleware([CheckAge::class,Demo::class]);
// Route::get('insert',[AgeController::class,'insert'])->middleware(CheckAge::class);

//activty tarcking
// Route::get('track',[ActionController::class,'track'])->name('track')->middleware(CheckAge::class);

//making groups of middleware

// Route::middleware([CheckAge::class,Demo::class])->group(function(){
//     Route::get('age',[AgeController::class,'index']);
//     Route::get('track',[ActionController::class,'track'])->name('track')->withoutMiddleware(Demo::class);
//     Route::get('insert',[AgeController::class,'insert'])->withoutMiddleware(Demo::class);
// });

//Group middleware
// Route::middleware('newOne')->group(function(){
//     Route::get('age',[AgeController::class,'index']);
//     Route::get('track',[ActionController::class,'track'])->name('track');
//     Route::get('insert',[AgeController::class,'insert']);
// });

Route::get('age',[AgeController::class,'index']);
    Route::get('track',[ActionController::class,'track'])->name('track');
    Route::get('insert',[AgeController::class,'insert']);

//sending message
Route::get('message/{id}',[ActionController::class,'message'])->name('message');
Route::post('sendMessage/{id}',[ActionController::class,'sendmessage']);

Route::get('Notification',[ActionController::class,'notify'])->name('notification');

//sending email
Route::get('sendmail',[EmailController::class,'sendmail']);

//multi user authentication for others users
Route::view('other','Dashboard.other')->name('other');

//service container
Route::get('service',function(MyService $myService){
     dump($myService->pay());
     dd(app());
});

Route::get('sendNotification',[MyServiceController::class,'sendNotification']);

Route::get('notification',[NotificationController::class,'index']);

//sending mails and brodcasting message
Route::get('shownotification',[EmailController::class,'showEmail'])->name('sendNotify');
Route::get('sendnotification',[EmailController::class,'sendEmail']);

Route::get('showbroadcast',[EmailController::class,'showBroadcast'])->name('sendbroadcast');
Route::post('sendbroadcast',[EmailController::class,'sendBroadcast']);

Route::get('follow',[EmailController::class,'follow'])->name('follow');
Route::get('notify/{id}',[EmailController::class,'notify'])->name('notify');

Route::get('markasread/{id}',[EmailController::class,'mardasread'])->name('mark');
Route::get('unread/{id}',[EmailController::class,'unread'])->name('unread');

//upload images
Route::get('photo',[PhotoController::class,'show'])->name('upload');
Route::post('uploadPhoto',[PhotoController::class,'upload']);
//working with api
Route::get('destroy',[PhotoController::class,'destroy'])->name('destroy');
