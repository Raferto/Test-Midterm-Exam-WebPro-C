<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }
    public function about()
    {
        return view('about',['tipe' => 'sekolah']);
    }
    public function login()
    {
        return view('authpage.login');
    }
    public function register()
    {
        return view('authpage.register');
    }
}
