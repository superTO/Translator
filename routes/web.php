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


Route::group(['middleware' => 'auth'], function () {

    Route::group(['middleware' => 'user'], function () {

        Route::get('user', function () {
            return view('user.user');
        });

        Route::get('upload', function () {
            return view('user.upload');
        });
        Route::get('user/index', 'DocumentController@showDocument');


        Route::get('user/detail/{document}', 'TranslatorController@showDetail');
        
        Route::post('userdocument', function () {
            request()->file('file_input')->store('userdocument');
            
            return back();
        });

    });

    Route::group(['middleware' => 'trans'], function () {

        Route::get('trans/index', 'DocumentController@showDocument');


        Route::get('trans/detail/{document}', 'TranslatorController@showDetail');

        Route::get('/trans/detail/edit/{document}', 'TranslatorController@showEdit');

        Route::post('/trans/upload/{document}', 'DocumentController@uploadFile');

        Route::get('/trans/index_', 'DocumentController@searchFile');

        Route::get('/trans/detail/{document}/Original_Download', 'DocumentController@downloadOriginalFile');
        Route::get('/trans/detail/{document}/Current_Download', 'DocumentController@downloadCurrentFile');

    });

    Route::group(['middleware' => 'pm'], function () {

        Route::get('pm', function () {
            return view('pm.pm');
        });

        Route::get('pmdetail', function () {

            $branch = 1;
            return view('pm.detail', compact("branch"));
        });

        Route::get('valuation', function () {
            return view('pm.valuation');
        });

        Route::get('assign', function () {
            return view('pm.assign');
        });
    });

    Route::group(['middleware' => 'admin'], function () {


        Route::get('admin/index', 'AdminController@index');

        Route::get('admin/index_Users', 'AdminController@UserIndex');
        Route::get('admin/index_PM', 'AdminController@PMIndex');
        Route::get('admin/index_Translators', 'AdminController@TranslatorIndex');

        Route::get('admin/more/{user}', 'AdminController@more');

        Route::patch('admin/finish/{user}', 'AdminController@finish');

        Route::get('admin/disable/{user}', 'AdminController@disable');

        Route::get('admin/enable/{user}', 'AdminController@enable');

        Route::get('/admin_', 'AdminController@searchAccount');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('testmail','MailController@uploadmail');  //test mail

// Route::post('fileHelp',function(){
//     //request()->file('uploaddocument')->store('userID');
//     $file = request()->file('uploaddocument');
//     $ext = $file->guessClientExtension();
//     return $file->storeAs('user' . auth()->id(),"file.{$ext}");
// });
