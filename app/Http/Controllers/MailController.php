<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\getmail;
use Mail;
use App\User;


class MailController extends Controller
{
        
	public function uploadmail()
	{
	    
	    $email = new getmail(new User(['name' => 'fuck']));
        Mail::to('YOOOOOOOOOO@example.com')->send($email);
        
	    
        
        //send email if you in this page
        /*
        $email = new getmail(new App\User(['name' => Input::get('name') ]));
	    
        Mail::to(Input::get('email'))->send($email);
        */
        return view('user.user');
	}
}