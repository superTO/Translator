<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\document;
use Validator;
class DocumentController extends Controller
{
    public function showDocument()
    {
    	$documents=document::all();
    	return view ('trans.trans',compact('documents'));
    }
    public function uploadFile(Request $request)
    {
        $this->validate($request,['document'=>'required']);
        $docu=$request->file('docu');
        $docu_name='New_'.$docu->getClientOriginalName();
        $request->file('docu')->storeAS('Documents',$docu_name);
        return back();
    }
}
