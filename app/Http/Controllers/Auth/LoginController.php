<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
 
protected function redirectTo( ) {
    if (Auth::check() && Auth::user()->isAdmin == 'admin') {
        return('/admin');
    }
    elseif (Auth::check() && Auth::user()->isAdmin == 'agent') {
        return('/agent');
    }
    else {
        return('/');
    }
}
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    
}
