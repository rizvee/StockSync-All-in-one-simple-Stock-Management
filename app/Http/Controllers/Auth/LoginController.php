<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function username()
    {
        return 'email';
    }

    protected function sendFailedLoginResponse(Request $request) 
    {
        return redirect()->back()
            ->withInput($request->only('email', 'remember'))
            ->withErrors(['email' => trans('auth.failed')]);
    }
}
