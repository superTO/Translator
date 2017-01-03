<?php

namespace App\Http\Controllers;


use App\document;
use ClassesWithParents\D;
use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Storage;
use File;
class PMcontroller extends Controller
{

    public function pm_index(){
        $show_indexs = DB::table('documents')
            ->select('documents.id AS d_id', 'documents.*', 'users.*')
            ->join('users' , 'documents.upload_user_id' , '=' , 'users.id')->get();
        return view('pm.pm' , compact('show_indexs'));
    }

    public function ViewCertainProcess($id){
        $show_indexs=document::with('upload_user')->where('id','=',$id)->get();
        return view('pm.detail' , compact('show_indexs'));

    }

    public function download($filename){
        $path = storage_path('app/Documents/' .$filename);
        return response()->download($path);

    }

    public function assign(document $document){
        $user = DB::table('users')->where('role' , '=' , '3')->get();
        return view('pm.assign' , compact('user','document'));
    }

    public function upload(Request $request,document $document){
        DB::table('documents')
            ->where('id' , '=' , $document->id)
            ->update(['translator1_id'=>$request->translator1_id , 'translator2_id'=>$request->translator2_id
                 , 'translator3_id'=>$request->translator3_id , 'translator4_id'=>$request->translator4_id
                , 'document_type' => '1']
             );
        return redirect('pm');
    }


    public function valuationpage(document $document){
        return view('pm.valuation',compact('document'));
    }
    public function valuation(Request $request,document $document)
    {
        
        $rules=['decision'=>'required'];
        $this->validate($request, $rules);
        if($request -> decision != 'Accept')
        {
            DB::table('documents')
                ->where('id' , '=' , $document->id)
                ->update(['translation_type' => '10' , 'payment_type' => '11']);
        }
        else
        {
            $rule=['money'=>'required'];
            $this->validate($request, $rule);
            DB::table('documents')
                ->where('id' , '=' , $document->id)
                ->update(['translation_type' => '0' , 'money' => $request -> money , 'payment_type' => '10']);
        }
        return redirect ('pm');
    }
    public function searchDocu(Request $request)
    {
        $keyword = $request->input('search');
        $show_indexs = DB::table('documents')
            ->where('document_name', 'LIKE', "%$keyword%")
            ->select('documents.id AS d_id', 'documents.*', 'users.*')
            ->join('users' , 'documents.upload_user_id' , '=' , 'users.id')->get();
        return view('pm.pm', compact('show_indexs'));
    }

    public function delete(document $document)
    {
        $path = storage_path('app/Documents/' . $document->text_name);
        File::delete($path);
       $documet = DB::table('documents')
          -> where('id' , '=' , $document->id)
          ->delete();
        return redirect ('pm');
    }







}
