<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\document;
use Validator;
use DB;
use Auth;
use app\User;
class DocumentController extends Controller
{
    public function showDocument()
    {
    	$id = Auth::user();
        $documents=document::all();
        $documents=$documents->load('translator1');
        $documents=$documents->load('translator2');
        $documents=$documents->load('translator3');
        $documents=$documents->load('translator4');
       //return $trans1_id=document::all()->translator1_id;
    	return view ('trans.trans',compact('documents','id'));
    }
    public function uploadFile(Request $request,document $document)
    {
        //$this->validate($request,['type'=>'mimes:doc,docx']);
        $docu_name='New_'.$document->text_name;
        $request->file('docu')->storeAS('Documents',$docu_name);
        return back();
    }
    public function searchFile(Request $request)
    {
        $keyword=$request->input('search');
        $documents=DB::table('documents')->where('document_name','LIKE',"%$keyword%")->get();
        dd($document);
        //orwhere('');
        return view('trans.trans/index_',compact('documents'));
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
    public function uploadFile(Request $request,document $document)
    {
        //$this->validate($request,['document'=>'required']);
        $docu_name='New_'.$document->text_name;
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
