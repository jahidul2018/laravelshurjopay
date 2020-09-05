<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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
        $this->middleware('guest')->except('logout');
    }
    // protected function credentials(Request $request)
    // {
    //     if(is_numeric($request->get('email'))){
    //         return ['mobile'=>$request->get('email'),'password'=>$request->get('password')];
    //     }
    //     return $request->only($this->username(), 'password');
    // }
    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        // return $this->authenticated($request, $this->guard()->user())
        //         ?: redirect()->intended($this->redirectPath());
        //dd($this->guard()->user()->is_admin);
        if ($this->guard()->user()->is_admin==1) {
            return redirect()->route('admin.index');
        } else if($this->guard()->user()->is_admin==0) {
            //dd($this->guard()->user()->is_admin);
            return redirect()->route('user_credential');
        }
        
    }
}
