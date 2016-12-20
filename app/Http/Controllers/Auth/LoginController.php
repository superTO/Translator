<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function username()
    {
        return 'account';
    }

    /*protected function validator(array $data)
    {
        return Validator::make($data, [
            'account' => 'required',
            'password' => 'required|min:6',
        ]);
    }

    protected function login(Request $data)
    {
        echo $data['account'],$data['password'];
        $user = DB::table('users')->where('account',$data['account'])->first();
        if (Auth::attempt( [$user->account => $data['account'], $user->password => bcrypt($data['password']) ] )) {
            // Authentication passed...
            return view( $this->redirectTo );
        }
    }*/
}
