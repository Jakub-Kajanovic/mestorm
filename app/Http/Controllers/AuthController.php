<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function create(){
       if(Auth::check()){
        return redirect('admin/blog');
       }
        return view('auth.login');
    }

    public function store(Request $request){
        if(!Auth::attempt($request->validate([
            'email' => 'required|email|string',
            'password' => 'required|string',
        ]), true)) {
            throw ValidationException::withMessages([
                'email' => 'the provided credentials do not match our records.',
            ]);
        }
        $request->session()->regenerate();
        return redirect()->intended('admin/blog')->with('success', 'You are logged in');
    }

    public function destroy(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'You are logged out');
    }
}
