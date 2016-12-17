<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\document;

class DocumentController extends Controller
{
    public function showDocument()
    {
    	$documents=document::all();
    	return view ('trans.trans',compact('documents'));
    }
}
