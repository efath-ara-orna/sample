<?php

namespace App\Http\Controllers\Auth\admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    public function loginform(){
        return view ('auth.admin.login');
    }

     public function signup(){
        return view ('auth.admin.register');
    }



public function login(Request $request){
        //return $request;
         if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            
            return redirect()->intended(route('admin.dashboard'));
          }else{
            $notification = array(
                'messege' => 'Email/password Are Incorrect',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
          }

               // if unsuccessful, then redirect back to the login with the form data
          return redirect()->back()->withInput($request->only('email', 'remember'));

    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
