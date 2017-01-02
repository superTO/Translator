<?php

namespace App\Http\Controllers;


use App\document;
use ClassesWithParents\D;
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
        $path = storage_path('app/Documents/' .$filename);
//        $path = 'storage/app/Documents' . '/' . $filename;

        return response()->download($path);

    }

    public function assign(document $document){
        $user = DB::table('users')->where('role' , '=' , '3')->get();
        //dump($user);
        //exit(0);
        return view('pm.assign' , compact('user','document'));
    }

    public function upload(Request $request,document $document){
        DB::table('documents')
            ->where('id' , '=' , $document->id)
            ->update(['translator1_id'=>$request->translator1_id , 'translator2_id'=>$request->translator2_id
                 , 'translator3_id'=>$request->translator3_id , 'translator4_id'=>$request->translator4_id]
             );
        return redirect('pm');
    }







}
