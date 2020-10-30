<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('authpage.login');
    }

    public function register()
    {
        return view('authpage.register');
    }

    public function postLogin(Request $request){
        // dd($request->all());
        if(Auth::attempt($request->only('username', 'password'))){
            return redirect('/');
        }
        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
