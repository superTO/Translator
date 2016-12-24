<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\getmail;
use Illuminate\Support\Facades\Auth;
use Validator;
use Mail;
use App\User;
use App\document;


class MailController extends Controller
{
    public function validator(document $document){
		return Validator::make($document, [
            'filename' => 'required|max:255',
            'data' => 'required',
            //'remark' => 'required',
            'ori_language' => 'required',
            'trans_language' => 'required',
            'file_input' => 'required',
            'document_type' => 'required'
        ]);
	}
	
	public function uploadmail(Request $request, document $document)
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
        $id = Auth::user();
        $email = new getmail();
        Mail::to('PMemail@example.com')->queue($email);
        
        
        

        document::create([
            'document_name' => $request['filename'],
            'due_date' => $request['date'],
            'remark' => $request['remark'],
            'original_language' => $request['ori_language'],
            'translated_language' => $request['trans_language'],
            'text_name' => $request['file_input'],
            'upload_user_id' => $id->id,
            'payment_type' => 0,
            'translation_type' => 0,
            'document_type' => 0,
            ]);
        $docu_name = 'New_'.$document->text_name;
        $request->file('file_input')->storeAs('Documents',$docu_name);
        
        return redirect('user');
	}
}