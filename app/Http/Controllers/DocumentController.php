<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\document;
use DB;
use Auth;
use App\User;
use File;

class DocumentController extends Controller
{
    public function showtransDocument()
    {
        $id = Auth::user();
        $documents = document::with('translator1', 'translator2', 'translator3', 'translator4')->get();

        return view('trans.trans', compact('documents', 'id'));
    }

    public function showuserDocument()
    {
        $id = Auth::user();
        $documents = document::with('translator1', 'translator2', 'translator3', 'translator4')->get();

        return view('user.user', compact('documents', 'id'));
    }

    public function uploadFile(Request $request, document $document)
    {
        $rules = ['documents'=>'required|mimes:docx,doc|max:25000', 'optionsRadios'=>'required'];
        $this->validate($request, $rules);
        DB::table('documents')->where('id', $document->id)->update(['translation_type' => $request->optionsRadios]);
        if($document->translated_upolad_filename!=NULL)
        {
            $path = storage_path('app/Documents/' . $document->translated_upolad_filename);
            File::delete($path);
        }
        $docu_name = sprintf('%s-%s.%s', md5(microtime(true)), str_random(8), $request->file('documents')->guessExtension());
        DB::table('documents')->where('id', $document->id)->update(['translated_upolad_filename' => $docu_name]);
        $request->file('documents')->storeAs('Documents', $docu_name);
        return redirect('/trans/index');
    }

    public function searchFile(Request $request)
    {
        $id = Auth::user();
        $keyword = $request->input('search');
        $documents = document::with('translator1', 'translator2', 'translator3', 'translator4')->where('document_name', 'LIKE', "%$keyword%")->get();
        return view('trans.trans', compact('documents', 'id'));
    }

    public function downloadCurrentFile(document $document)
    {
        $docu_name = $document->translated_upolad_filename;
        $path = storage_path("app/Documents/".$docu_name);
        if(File::exists($path)&&$docu_name!=NULL)
        {
            return response()->download($path);
        }
        else
        {
            return back();
        }
        
    }

    public function downloadOriginalFile(document $document)
    {
        $docu_name = $document->text_name;
        $path = storage_path("app/Documents/".$docu_name);
        return response()->download($path);
    }
}
