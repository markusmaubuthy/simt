<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    public function index()
    {
        return view ('register', [
            'title' => 'Register | SIMT Spensa'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required',
        ]);

        $validatedData['status'] = 1;
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        // dd($validatedData);

        User::create($validatedData);

        return redirect('/login')->with('status', 'Registrasi berhasil') ;

    }
}
