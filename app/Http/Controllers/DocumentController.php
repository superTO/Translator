<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;

class DocumentController extends Controller
{
    public function showDetail(document $document)
    {
        return view('trans.detail',compact('document'));
    }
    public function showEdit(document $document)
    {
        return view('trans.edit',compact('document'));
    }
}
