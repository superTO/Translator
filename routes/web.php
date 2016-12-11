<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use App\Mail\getmail;

Route::get('/', function () {
    //$email = new getmail(new App\User(['name' => 'userName_fromDatabase']));
    //Mail::to('hello@example.com')->send($email);
    //send email if you in this page
    
    return view('welcome');
});

Route::get('about',function(){
    return view ('pages.about');
});

Route::get('user',function(){
    return view ('user.user');
});

Route::get('upload',function(){
    return view ('user.upload');
});

Route::get('trans',function(){
    return view ('trans.trans');
});

Route::get('detail',function(){
    return view ('trans.detail');
});

Route::get('edit',function(){
    return view ('trans.edit');
});

Route::get('pm',function(){
    return view ('pm.pm');
});

Route::get('pmdetail',function(){

    $branch = 1;
    return view ('pm.detail' , compact("branch"));
});

Route::get('valuation',function(){
    return view ('pm.valuation');
});