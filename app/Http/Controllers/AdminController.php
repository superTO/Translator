<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class AdminController extends Controller
{
    public function index()
    {
        $ids = User::get();

        return view('admin.index', compact('ids'));
    }

    public function edit(User $user)
    {
        return view('admin.edit',compact('user'));
    }

    public function finish(Request $request,User $user)
    {
        /*
        $user->name = $request->name;
        $user->account = $request->account;
        $user->password = $request->password;
        $user->ssn = $request->ssn;
        $user->phone = $request->phone;
        $user->email = $request->email;

        return redirect('/admin/index');*/

        $user->update($request->all());
        return redirect('/admin/index');
        //$request->all();
        //return $request->all();
        //return $user;
    }
}
