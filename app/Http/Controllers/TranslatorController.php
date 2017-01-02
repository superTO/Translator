<?php

namespace App\Http\Controllers;

use App\document;

class TranslatorController extends Controller
{
    public function translatorpage()
    {
        $translatiion_doc = DB::table('documents')->where('translator1_id', translator_login_id)
                                             ->orWhere('translator2_id', translator_login_id)
                                             ->orWhere('translator3_id', translator_login_id)
                                             ->orWhere('translator4_id', translator_login_id)
                                             ->get();

        return view('Translatorview', compact('translatiion_doc'));
    }

    public function showDetail(document $document)
    {
        $document = $document->load('translator1');
        $document = $document->load('translator2');
        $document = $document->load('translator3');
        $document = $document->load('translator4');

        return view('trans.detail', compact('document'));
    }

    public function showEdit(document $document)
    {
        $document = $document->load('translator1');
        $document = $document->load('translator2');
        $document = $document->load('translator3');
        $document = $document->load('translator4');

        return view('trans.edit', compact('document'));
    }
}
