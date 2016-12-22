<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\document;
use Validator;
use DB;
use Auth;
use App\User;
class DocumentController extends Controller
{
    public function showDocument()
    {
    	$id = Auth::user();
         $documents=document::all();
        $documents=$documents->load('translator1');
         $documents=$documents->load('translator2');
         $documents=$documents->load('translator3');
         $documents=$documents->load('translator4'); //return $trans1_id=document::all()->translator1_id;
        //dd($documents);
    	return view ('trans.trans',compact('documents','user','id'));
    }
    public function uploadFile(Request $request,document $document)
    {
        $rules=["documents"=>'required|mimes:docx,doc|max:25000'];
        $this->validate($request,$rules);
        $docu_name='New_'.$document->text_name;
        $request->file('documents')->storeAS('Documents',$docu_name);
        return back();
    }
    public function searchFile(Request $request)
    {
         $id = Auth::user();
        $keyword=$request->input('search');
          $documents1=DB::table('documents')->where('document_name','LIKE',"%$keyword%")->get();
          dd($documents1);
          /*$documents2=$documents2->load('translator1');
          $documents2=$documents2->load('translator2');
          $documents2=$documents2->load('translator3');
          $documents2=$documents2->load('translator4');*/
        return view('trans.trans',compact('documents','id'));
    }
    public function downloadCurrentFile(document $document)
    {
        $docu_name='New_'.$document->text_name;
        $path=storage_path("app\Documents\\".$docu_name);
        return response()->download($path);
    }
    public function downloadOriginalFile(document $document)
    {
        $docu_name=$document->text_name;
        $path=storage_path("app\Documents\\".$docu_name);
        return response()->download($path);
    }
}
