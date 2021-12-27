<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('admin.admin_login');
    }
    public function dologin(Request $request)
    {
        $userInfo=$request->except('_token');
        if(Auth::attempt($userInfo)){
            return redirect()->route('home')->with('message', 'Login successful');
        }
        return redirect()->back()->with('error', 'Invalid user credentials');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('message', 'Logging out');
    }
}
