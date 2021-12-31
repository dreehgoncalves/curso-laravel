<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function dashboard()
    {
        if (Auth::check() === true) {
            return view('admin.dashboard');
        }
    }

    public function showLoginForm(){
        return view('admin.formLogin');
    }
}
