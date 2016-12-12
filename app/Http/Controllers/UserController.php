<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     public function userpage(){
	  $user_doc=DB::talbe('documents')->where('upload_user_id',user_login_id)
		    								   ->get();
	    return view('USERview',compact('user_doc'));

	}
}
