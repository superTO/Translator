<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     public function userpage(){
	  $user_doc=DB::table('documents')->where('upload_user_id',user_login_id)
		    								   ->get();
	    return view('Userview',compact('user_doc'));

	}
	
		
}
