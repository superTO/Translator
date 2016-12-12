<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranslatorController extends Controller
{
    public function translatorpage(){
	  $translatiion_doc=DB::talbe('documents')->where('translator1_id',translator_login_id)
	                                         ->orWhere('translator2_id',translator_login_id)
		    								 ->orWhere('translator3_id',translator_login_id)
											 ->orWhere('translator4_id',translator_login_id)
											 ->get();
	    return view('Translatorview',compact('translatiion_doc'));

	}
}
