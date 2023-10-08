<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Auth;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('homepage.login');
    }

    public function loginNow(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'

        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect()->intended('residentpage.resident');
        }

        // Authentication failed
        return back()->withErrors(['username' => 'Invalid credentials']);
    }
}
