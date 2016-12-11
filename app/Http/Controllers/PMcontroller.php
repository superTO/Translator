<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PMcontroller extends Controller
{
     public function PMpage(){
	  $case_not_handle=DB::talbe('documents')->where('translation_type',0)
	                                         ->orWhere('payment_type',0)
		    								   ->get();
	    return view('PMview',compact('case_not_handle'));

	}
}
