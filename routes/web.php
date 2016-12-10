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
