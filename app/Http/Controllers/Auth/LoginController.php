<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Exception;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Session;
use Auth;
use App\Providers\RouteServiceProvider;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function loginBiasa(Request $request){

        $validasi = db::table('users')
                         ->where('email', $request->input('email'))
                         ->get()->first;

        $role = DB::table('users')
                        ->where('email', $request->input('email'))
                        ->first();
       
        if($validasi){ //apakah email tersebut ada atau tidak
            if(sha1($request->input('password')) == $validasi->email->password){
                $request->session()->put('login','1');
                $request->session()->put('email',$request->input('email'));
                if ($role->account_role == 'superadmin') {
                    return redirect('/admin');
                } else{
                return redirect(' ')->with('alert','password atau User, Salah !');
            }
        }else{
            return redirect(' ')->with('alert','password atau User, Salah !');
            }
        }
    }
}