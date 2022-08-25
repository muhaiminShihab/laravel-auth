<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // register user
    public function register(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'password' => 'required',
            ]);

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            return redirect()->route('login');
        } else {
            return view('auth.register');
        }
        
    }

    // login user
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->route('dashboard');
            } else {
                return redirect('/not-found');
            }
            
        } else {
            return view('auth.login');
        }
        
    }

    // logout user
    public function logout()
    {
        Auth::logout();
        return back();
    }

    // dashboard page
    public function dashboard()
    {
        return view('dashboard');
    }
}
