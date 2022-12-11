<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showLogin()
    {
        return view('login-haidar');
    }

    public function login(Request $r) 
    {
        $login = Auth::attempt([
            'email' => $r->email,
            'password' => $r->password,
        ]);
        if ($login == true) {
            $r->session()->regenerate();
            return redirect()->intended('/');
        } else{
            return redirect('/login');
        };
        
    }

    public function showRegis()
    {
        return view('register-haidar');
    }

    public function register(Request $r)
    {
        if ($r->pass != $r->passconf) {
            return redirect('/register');
        }
        $r->pass = bcrypt($r->passconf);
        User::create([
            'email' => $r->email,
            'name' => $r->nama,
            'no_hp' => $r->telp,
            'password' => $r->pass,
        ]);
        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
