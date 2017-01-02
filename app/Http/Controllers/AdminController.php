<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
        $ids = User::all();

        return view('admin.index', compact('ids'));
    }

    public function UserIndex()
    {
        $ids = \DB::table('users')->where('role', '1')->get();

        return view('admin.index', compact('ids'));
    }

    public function PMIndex()
    {
        $ids = \DB::table('users')->where('role', '2')->get();

        return view('admin.index', compact('ids'));
    }

    public function TranslatorIndex()
    {
        $ids = \DB::table('users')->where('role', '3')->get();

        return view('admin.index', compact('ids'));
    }

    public function more(User $user)
    {
        return view('admin.more', compact('user'));
    }

    public function finish(Request $request, User $user)
    {
        $user->update($request->all());

        return redirect('/admin/index');
    }

    public function disable(User $user)
    {
        if ($user->role < 10) {
            $user->update(['role'=>($user->role + 10)]);
        }

        return redirect('/admin/index');
    }

    public function enable(User $user)
    {
        if ($user->role >= 10) {
            $user->update(['role'=>($user->role - 10)]);
        }

        return redirect('/admin/index');
    }

    public function searchAccount(Request $request)
    {
        $keyword = $request->input('search');
        $ids = User::searchUser($keyword)->get();

        return view('admin.index', compact('ids'));
    }
}
