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


Route::get('/', function () {
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

Route::get('/trans/detail/{document}','DocumentController@showDetail');

Route::get('/trans/detail/edit/{document}','DocumentController@showEdit');

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

Route::get('assign',function(){
    return view ('pm.assign');
});

Route::get('admin',function(){
    return view ('admin.admin');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('testmail','MailController@uploadmail');  //test mail

