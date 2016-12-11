<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SignupController extends Controller
{
    public function store(Request $request,User $user){
        
        $user->note()->create([
            'account' => request->account;
        ])
        
        //$user->note()->create(request->all());
        
        
        return redirect()->to('Welcome');
    }
}
