<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\document;
use Validator;
use DB;
class DocumentController extends Controller
{
    public function showDocument()
    {
    	$documents=document::all();
    	return view ('trans.trans',compact('documents'));
    }
    public function uploadFile(Request $request)
    {
        //$this->validate($request,['document'=>'required']);
        $docu=$request->file('docu');
        $docu_name='New_'.$docu->getClientOriginalName();
        $request->file('docu')->storeAS('Documents',$docu_name);
        return back();
    }
    public function searchFile(Request $request)
    {
        $keyword=$request->input('search');
        $documents=DB::table('documents')->where('document_name','LIKE',"%$keyword%")->get();
        
        //orwhere('');
        return view('trans.trans',compact('documents'));
    }
    public function downloadCurrentFile(document $document)
    {
        //
        /*$docu_name='New_'.$document->document_name;
        $path=storage_path("app\documents\\".$docu_name);
        //return $path;
        //$headers=['Content-Type: application/pdf'];
        return response()->download($path,$docu_name,$headers);*/
    }
    public function downloadOriginFile(document $document)
    {
              //
    }
}
