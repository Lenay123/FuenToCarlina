<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('homepage.register');
    }

    public function registration(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'birthday' => 'required|date',
            'contact_number' => 'required|string|max:20',
            'gender' => 'required|in:male,female',
            'address' => 'required|in:Proper Nabunturan Barili Cebu, Sitio San Roque Nabunturan Barili Cebu, Sitio Cabinay Nabunturan Barili Cebu',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
        } else {
            $imagePath = null;
        }

        User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'middle_name' => $request->input('middle_name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'birthday' => $request->input('birthday'),
            'contact_number' => $request->input('contact_number'),
            'gender' => $request->input('gender'),
            'address' => $request->input('address'),
            'image' => $imagePath,
            'role' => 'user', // Default role for registered users
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. You can now log in.');
    }   
}
