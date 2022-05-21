<?php

namespace app\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
use AuthenticatesUsers;
    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function showLoginForm()
    {
        return view('auth.admin.login');
    }
    
    protected function guard()
    {
        return \Auth::guard('admin');
    }
}
