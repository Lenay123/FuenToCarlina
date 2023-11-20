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




    // function loginPost(Request $request){
    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required'

    //     ]);

    //     $credentials = $request->only('email', 'password');
    //     if(Auth::attempt($credentials)){
    //         return redirect()->intended(route('residentpage.resident'));
    //     }
    //     return redirect(route('login'))->with("error", "Login details are not valid");
    // }
    



    function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
    
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            
            switch ($user->role) {
                case 'user':
                    return redirect()->intended(route('residentpage.resident'));
                    break;
                case 'secretary':
                    return redirect()->route('dashboard_secretary');
                    break;
                case 'admin':
                    return redirect()->route('dashboard');
                    break;
                // Add more cases for other roles if needed
                default:
                    Auth::logout();
                    return redirect(route('login'))->with("error", "Login details are not valid");
            }
        }
    
        // If no user is authenticated, check for hardcoded admin credentials
        $adminUsername = 'admin@gmail.com';
        $adminPassword = 'admin123';
    
        if ($request->email === $adminUsername && $request->password === $adminPassword) {
            // Admin login successful
            auth()->loginUsingId(1); // Replace 1 with the actual admin user ID
            return redirect()->route('dashboard'); // Change to your actual admin dashboard route
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
            'address' => 'required|in:' . implode(',', User::ADDRESS_OPTIONS), // Use the options from the model

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
            'address' => $request->input('address'),
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
    public function updateProfile(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . auth()->user()->id,
            'password' => 'nullable|min:8|confirmed',
        ]);

        // Get the authenticated user
        $user = auth()->user();

        // Update the user's name and email
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->middle_name = $request->input('middle_name');
        $user->email = $request->input('email');

        // Update the user's password if a new one was provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        // Save the user's updated information
        $user->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }


    
    public function loginSecretary(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            // Check the role of the authenticated user
            $user = Auth::user();
    
            if ($user->role === 'secretary') {
                // Redirect to the secretary dashboard if the role is 'secretary'
                return redirect()->route('dashboard_secretary');
            }
    
            // If the role is not 'secretary', logout and redirect with an error message
            Auth::logout();
            return redirect()->route('login')->with("error", "Incorrect credentials for Secretary access");
        }
    
        return redirect()->route('login')->with("error", "Login details are not valid");
    }
    
    

   public function dashboard(){
        return view('secretary.secretary_dashboard');
      
    }
    function secretarylogout(){
        // Session::flush();
        Auth::logout();
        return redirect()->route('login');
}


public function loginAdmin(Request $request)
{
    // Replace these with your actual admin credentials
    $adminUsername = 'admin@gmail.com';
    $adminPassword = 'admin123';

    $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    // Check if provided credentials match admin credentials
    if ($request->email === $adminUsername && $request->password === $adminPassword) {
        // Admin login successful
        auth()->loginUsingId(1); // Replace 1 with the actual admin user ID
        return redirect()->route('dashboard'); // Change to your actual admin dashboard route
    }

    // Admin login failed
    return redirect()->route('login')->with('error', 'Invalid email or password');
}

function adminpagelogout(){
    // Session::flush();
    Auth::logout();
    return redirect()->route('login');
}



}



