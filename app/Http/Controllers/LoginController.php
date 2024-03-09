<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'Login | SIMT - UPTD SMP Negeri 1 Kalabahi'
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
 
        return back()->with([
            'status' => 'Login Error!',
        ]);
        
    }

    public function logout()
    {
        Auth::logout();
 
        request()->session()->invalidate();
     
        request()>session()->regenerateToken();
     
        return redirect('/');
    }
}
