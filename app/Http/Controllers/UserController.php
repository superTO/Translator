<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     public function userpage(){
	  $user_doc=DB::table('documents')->where('upload_user_id',user_login_id)
		    								   ->get();
	    return view('USERview',compact('user_doc'));

	}
	
	public function validator(array $document){
		return Validator::make($document, [
            'filename' => 'required|max:255',
        ]);
	}
	
	public function create(array $document){
		return document::create([
            'document_name' => $document['filename'],
            'due_date' => $document['date'],
            'document_type' => $document['artical_type'],
            'original_language' => $document['ori_language'],
            'translated_language' => $document['trans_language'],
            'text_name' => $document['file_input']
        ]);
	}
		
}
