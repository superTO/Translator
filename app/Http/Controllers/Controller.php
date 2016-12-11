<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
class PMcontroller extends Controller
{
    public function PMpage(){
	  $case_not_handle=DB::talbe('documents')->where('translation_type',0)
	                                         ->orWhere('payment_type',0)
		    								   ->get();
	    return view('PMview',compact('case_not_handle'));

	}
	
}