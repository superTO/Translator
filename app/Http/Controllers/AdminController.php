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

    public function more(User $user)
    {
        return view('admin.more',compact('user'));
    }

    public function finish(Request $request,User $user)
    {
        //$user->update($request->all());

        return redirect('/admin/index');
    }

    public function disable(User $user)
    {
        $user->update(['role'=>($user->role+10)]);

        return redirect('/admin/index');
    }

    public function enable(User $user)
    {
        $user->update(['role'=>($user->role-10)]);

        return redirect('/admin/index');
    }
}
