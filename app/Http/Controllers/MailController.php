<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\getmail;
use Illuminate\Support\Facades\Auth;
use Validator;
use Mail;
use DB;
use App\User;
use App\document;

class MailController extends Controller
{
    public function validator(document $document)
    {
        return Validator::make($document, [
            'filename' => 'required|max:255',
            'data' => 'required',
            //'remark' => 'required',
            'ori_language' => 'required',
            'trans_language' => 'required',
            'file_input' => 'required',
            'document_type' => 'required',
        ]);
    }

    public function uploadmail(Request $request, document $document)
    {
        $id = Auth::user();

        $PMemail = DB::table('users')->where('role', 2)->value('email');
        $email = new getmail();
        Mail::to($PMemail)->queue($email);

        $docu_name = $request->file('file_input')->getClientOriginalName();

        $request->file('file_input')->storeAs('Documents',$docu_name);


        $document = document::create([
            'document_name' => $request['filename'],
            'due_date' => $request['date'],
            'remark' => $request['remark'],
            'original_language' => $request['ori_language'],
            'translated_language' => $request['trans_language'],
            'text_name' => $docu_name,
            'upload_user_id' => $id->id,
            'payment_type' => 0,
            'translation_type' => 0,
            'document_type' => 0,
            'money' => 0,
            ]);

        return redirect('user');
    }
}
