<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\getmail;
use Mail;
use App\User;


class MailController extends Controller
{
        
    public function validator(array $document){
		return Validator::make($document, [
            'filename' => 'required|max:255',
        ]);
	}
	
	public function uploadmail(array $document)
	{
	    
	    //$email = new getmail(User::where('Name', $entry->Name)->firstOrFail());
	    
	    //$email = new getmail(new User(['name' => 'fuck']));
	    
	    //$date = Carbon::now()->addMinutes(15);
        //Queue::later($date, 'PMemail@example.com',$email);
        return document::create([
            'document_name' => $document['filename'],
            'due_date' => $document['date'],
            'document_type' => $document['artical_type'],
            'original_language' => $document['ori_language'],
            'translated_language' => $document['trans_language'],
            'text_name' => $document['file_input'],
            ]);
        
        $email = new getmail();
        Mail::to('PMemail@example.com')->queue($email);
        
	    
        
        //send email if you in this page
        /*
        $email = new getmail(new App\User(['name' => Input::get('name') ]));
	    
        Mail::to(Input::get('email'))->send($email);
        */
        return redirect('user');
	}
}