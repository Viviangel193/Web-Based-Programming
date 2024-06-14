<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view("login");
    }
    public function ceklogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect("/home");
        } else {
            return redirect("/")->withErrors(['email' => 'Email atau password salah']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect("/");
    }
}
