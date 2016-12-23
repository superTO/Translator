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
         $documents=document::with('translator1','translator2','translator3','translator4')->get();
    	return view ('trans.trans',compact('documents','id'));
    }
    public function uploadFile(Request $request,document $document)
    {
        DB::table('documents')->where('id',$document->id)
                            ->update(['translation_type' => $request->optionsRadios]);
        $rules=["documents"=>'required|mimes:docx,doc|max:25000'];
        $this->validate($request,$rules);
        $docu_name='New_'.$document->text_name;
        $request->file('documents')->storeAS('Documents',$docu_name);
        return redirect('/trans/index');
    }
    public function searchFile(Request $request)
    {
        $id = Auth::user();
        $keyword=$request->input('search');
        $documents=document::with('translator1','translator2','translator3','translator4')->where('document_name','LIKE',"%$keyword%")->get();
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
