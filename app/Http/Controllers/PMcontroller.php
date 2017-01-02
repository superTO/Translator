<?php

namespace App\Http\Controllers;

use App\document;
use Illuminate\Http\Request;
use DB;

class PMcontroller extends Controller
{

    public function pm_index(){
        $show_indexs = DB::table('documents')
            ->select('documents.id AS d_id', 'documents.*', 'users.*')
            ->join('users' , 'documents.upload_user_id' , '=' , 'users.id')->get();
        return view('pm.pm' , compact('show_indexs'));
    }

    public function ViewCertainProcess($id){
        $show_indexs = DB::table('documents')
            ->where('documents.id' , $id)
            ->join('users' , 'documents.upload_user_id' , '=' , 'users.id')
            ->get();
        //dump($show_indexs);
        //exit(0);
        return view('pm.detail' , compact('show_indexs'));

    }

    public function download($filename){
        $path = storage_path('app\Documents' .$filename);
//        $path = 'storage/app/Documents' . '/' . $filename;

        return response()->download($path);

    }

    /*public function PMpage(){
	  $case_not_handle=DB::talbe('documents')->where('translation_type',0)
	                                         ->orWhere('payment_type',0)
		    								   ->get();
	    return view('PMview',compact('case_not_handle'));

	}
	public function Dropdownlistcreat()
	{
		$translator=DB::talbe('users')->where('role',3)->list('name','id');
		return  view()->with('users',$translator);
	}
	public function Updatedatabase()
	{
		$translator_id = Input::get('translator_id');
		//unknow document_id
		DB::table('documents ')->where('id','document_id')
		                       ->update(['translator1_id'=>translator_id]);
    
	}*/
	
}
