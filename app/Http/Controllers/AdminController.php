<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $ids = \DB::table('users')->get();

        return view('admin.index', compact('ids'));
    }

    public function edit($ID)
    {
        //$id = DB::table('users')->get();

        //return view('admin.edit',compact('id'))
    }
}
