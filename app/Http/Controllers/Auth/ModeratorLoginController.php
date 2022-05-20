<?php

namespace app\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class ModeratorLoginController extends Controller
{
    use AuthenticatesUsers;
    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function showLoginForm()
    {
        return view('auth.moderator.login');
    }
    
    protected function guard()
    {
        return Auth::guard('moderator');
    }
}
