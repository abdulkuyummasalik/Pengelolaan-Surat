<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            if ($user->role === 'guru') {
                return redirect()->route('home');
            } elseif ($user->role === 'staff') {
                return redirect()->route('home');
            } else {
                Auth::logout();
                return redirect()->route('login')->with('error', 'Role tidak dikenali.');
            }
        } else {
            return redirect()->route('login')->with('error', 'Email atau password salah.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }   
}