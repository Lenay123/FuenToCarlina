<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Session;
use App\Models\Service;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function showResident(){

        $services = Service::all();
        return view('residentpage.resident', ['services' => $services]);
    }

    function login(){
        if(Auth::check()){
            return redirect()->route('home');
        }
        return view('login');
    }

    function registration(){
        if(Auth::check()){
            return redirect()->route('home');
        }
        
        return view('registration');
    }

    function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'

        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('residentpage.resident'));
        }
        return redirect(route('login'))->with("error", "Login details are not valid");
    }

    function registrationPost(Request $request){
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'birthday' => 'required|date',
            'contact_number' => 'required|string|max:20',
            'gender' => 'required|in:male,female',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB

        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
        } else {
            $imagePath = null;
        }

        $user = User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'middle_name' => $request->input('middle_name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'birthday' => $request->input('birthday'),
            'contact_number' => $request->input('contact_number'),
            'gender' => $request->input('gender'),
            'image' => $imagePath,
            'role' => 'user', // Default role for registered users
        ]);

        if(!$user){
            return redirect(route('registration'))->with("error", "Try again");
        }

        return redirect()->route('login')->with("success", "Registration successful");

    }

    function logout(){
            // Session::flush();
            Auth::logout();
            return redirect()->route('login');
    }





    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}