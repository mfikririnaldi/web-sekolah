<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }


    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'requiredEmail',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)){
            $request-session()->regenerate();
            return redirect()->intended('/dasboard');
        }

        return back()->with('loginerror', 'Login Gagal, Periksa kembali akun anda!');
    }
    
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
    //
}
