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

    public function postRegister(Request $request){
        try {
            $user = new \App\Models\User;
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->auth_level = 'user';
            $user->save();
            return redirect('/login')->with('status', 'Your Account Has Created');
        } catch (Throwable $e) {
            report($e);
            return false;
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
