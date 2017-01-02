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

Route::group(['middleware' => 'lang'], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('about', function () {
        return view('pages.about');
    });

    Route::get('/lang/set/{lang}', 'LanguageController@set_lang');

    Route::group(['middleware' => 'auth'], function () {

        /************************************/

        Route::group(['middleware' => 'user'], function () {

            /* Route::get('user', function () {
                 return view('user.user');
             });
           */

            Route::get('user', 'DocumentController@showuserDocument');
            Route::get('user/upload', function () {
                return view('user.upload');
            });

            Route::get('user/download/{filename}' , ['uses' => 'PMcontroller@download' , 'as' => 'filename']);

            Route::get('user/cancel/{filename}' , ['uses' => 'UserController@cancelDocument' , 'as' => 'filename']);

            Route::post('/user', 'MailController@uploadmail');

            // Route::get('user/detail/{document}', 'TranslatorController@showDetail');
        });

        /************************************/

        Route::group(['middleware' => 'trans'], function () {
            Route::get('trans/index', 'DocumentController@showtransDocument');

            Route::get('trans/detail/{document}', 'TranslatorController@showDetail');

            Route::get('/trans/detail/edit/{document}', 'TranslatorController@showEdit');

            Route::post('/trans/upload/{document}', 'DocumentController@uploadFile');

            Route::get('/trans/index_', 'DocumentController@searchFile');

            Route::get('/trans/detail/{document}/Original_Download', 'DocumentController@downloadOriginalFile');
            Route::get('/trans/detail/{document}/Current_Download', 'DocumentController@downloadCurrentFile');
        });

        /************************************/

        Route::group(['middleware' => 'pm'], function () {
            Route::get('pm', 'PMcontroller@pm_index');


            //Route::get('detail' , 'PMcontroller@ViewAllProcess');

            Route::get('detail/{id}' , ['uses' => 'PMcontroller@ViewCertainProcess' , 'as' => 'id']);

            Route::get('detail/download/{filename}' , ['uses' => 'PMcontroller@download' , 'as' => 'filename']);

            Route::get('assign/upload' , 'PMcontroller@upload');


            Route::get('valuation', function () {
                return view('pm.valuation');
            });

            Route::get('assign', 'PMcontroller@assign');
        });

        /************************************/

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
});

Route::get('/home', 'HomeController@index');
Route::get('disable', function () {
    return view('disable.disable');
});

Route::post('testmail', 'MailController@uploadmail');  //test mail

// Route::post('fileHelp',function(){
//     //request()->file('uploaddocument')->store('userID');
//     $file = request()->file('uploaddocument');
//     $ext = $file->guessClientExtension();
//     return $file->storeAs('user' . auth()->id(),"file.{$ext}");
// });
