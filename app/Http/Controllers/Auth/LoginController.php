<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /*----------------------------------------------*/

    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $this->validateLogin($request);        

        if (Auth::attempt(['codigo_usuario' => $request->codigo_usuario,'password' => $request->password])){
            return redirect()->route('home');
        }

        return back()
        ->withErrors(['codigo_usuario' => trans('auth.failed')])
        ->withInput(request(['codigo_usuario']));

    }

    protected function validateLogin(Request $request){
        $this->validate($request,[
            'codigo_usuario' => 'required|string',
            'password' => 'required|string'
        ]);

    }
}
