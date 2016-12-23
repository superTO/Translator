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
	    
	    //$email = new getmail(User::where('Name', $entry->Name)->firstOrFail());
	    
	    //$email = new getmail(new User(['name' => 'fuck']));
	    
	    //$date = Carbon::now()->addMinutes(15);
        //Queue::later($date, 'PMemail@example.com',$email);
        
	    
        
        //send email if you in this page
        /*
        $email = new getmail(new App\User(['name' => Input::get('name') ]));
	    
        Mail::to(Input::get('email'))->send($email);
        */
        $email = new getmail();
        Mail::to('PMemail@example.com')->queue($email);
        
        
        
        return redirect('user');
	}
}