<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\document;
use Auth;
use DB;
use File;
class UserController extends Controller
{
    public function showDocument()
    {
        $id = Auth::user();

        $documents = document::with('translator1', 'translator2', 'translator3', 'translator4')->get();

        return view('user', compact('documents', 'id'));
    }

    public function cancelDocument($filename)
    {
        $path = storage_path('app/Documents/' . $filename);
        File::delete($path);
       $document=DB::table('documents')->where('text_name','=',$filename)->get();//->delete();
        $trans_file_name=$document[0]->translated_upolad_filename;
        if($trans_file_name!=NULL)
        {
            $path = storage_path('app/Documents/' . $trans_file_name);
            File::delete($path);
        }
        $document=DB::table('documents')->where('text_name','=',$filename)->delete();
       return redirect('/user');
    }

    public function searchDocu(Request $request)
    {
        $keyword = $request->input('search');
        $id = Auth::user();
        $documents = document::searchDocu($keyword)->get();

        return view('user.user', compact('documents','id'));
    }
}
