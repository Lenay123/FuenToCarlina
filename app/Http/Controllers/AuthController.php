<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Session;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\Models\DocumentRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function showResident()
    {
        // Retrieve document requests with 'Pending' status
        $document_requests = DocumentRequest::all();

    
        return view('residentpage.resident', compact('document_requests'));
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


    
    // function loginPost(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required'
    //     ]);
    
    //     $credentials = $request->only('email', 'password');
    
    //     if (Auth::attempt($credentials)) {
    //         $user = Auth::user();
    
    //         // Check if the user is an admin
    //         if ($user->role === 'admin') {
    //             // You may add additional checks for admin login if needed
    //             return redirect()->route('dashboard');
    //         }
    
    //         // Redirect based on the user's role
    //         switch ($user->role) {
    //             case 'user':
    //                 return redirect()->intended(route('residentpage.resident'));
    //             case 'secretary':
    //                 return redirect()->route('dashboard_secretary');
    //             // Add more cases for other roles if needed
    //             default:
    //                 Auth::logout();
    //                 return redirect(route('login'))->with("error", "Login details are not valid");
    //         }
    //     }
    
    //     // If no user is authenticated, check for hardcoded admin credentials
    //     $adminUsername = 'admin@gmail.com';
    //     $adminPassword = 'admin123';
    
    //     if ($request->email === $adminUsername && $request->password === $adminPassword) {
    //         // Admin login successful
    
    //         // Check if admin user already exists in the database
    //         $admin = User::where('email', $adminUsername)->first();
    
    //         if (!$admin) {
    //             // Create admin user if not exists
    //             $admin = User::create([
    //                 'first_name' => 'Almar',
    //                 'last_name' => 'Gutierrez',
    //                 'middle_name' => 'L.',
    //                 'birthday' => Carbon::parse('October 1, 1990')->format('Y-m-d'),
    //                 'contact_number' => '09095432419',
    //                 'gender' => 'male',
    //                 'address' => 'Proper Nabunturan Barili Cebu',
    //                 'role'=> 'admin',
    //                 'email' => $adminUsername,
    //                 'password' => Hash::make($adminPassword),
    //                 // Add other profile information as needed
    //             ]);
    //         }
    
    //         Auth::login($admin);
    
    //         return redirect()->route('dashboard'); // Change to your actual admin dashboard route
    //     }
    
    //     return redirect(route('login'))->with("error", "Login details are not valid");
    // }
 
    function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            // Check if the user is not an admin or secretary and has not verified their email
            if (!in_array($user->role, ['admin', 'secretary']) && !$user->hasVerifiedEmail()) {
                Auth::logout();
                return redirect(route('login'))->with("error", "Invalid Credentials.");
            }
    
            // Redirect based on the user's role
            switch ($user->role) {
                case 'admin':
                    return redirect()->route('dashboard');
                case 'user':
                    return redirect()->intended(route('residentpage.resident'));
                case 'secretary':
                    return redirect()->route('dashboard_secretary');
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
            $admin = User::where('email', $adminUsername)->first();
    
            if (!$admin) {
                $admin = User::create([
                    'first_name' => 'Almar',
                    'last_name' => 'Gutierrez',
                    'middle_name' => 'L.',
                    'birthday' => Carbon::parse('October 1, 1990')->format('Y-m-d'),
                    'contact_number' => '09095432419',
                    'gender' => 'male',
                    'address' => 'Proper Nabunturan Barili Cebu',
                    'role'=> 'admin',
                    'email' => $adminUsername,
                    'password' => Hash::make($adminPassword),
                ]);
            }
    
            Auth::login($admin);
    
            return redirect()->route('dashboard'); // Change to your actual admin dashboard route
        }
    
        return redirect(route('login'))->with("error", "Login details are not valid");
    } 
    
    

    public function updateProfileAdmin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'contact_number' => 'required',
            'email' => 'required|email',
            'birthday' => 'required|date',
            'address' => 'required',
            'gender' => 'required',
            'new_password' => 'nullable|min:6|confirmed',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $admin = User::where('email', $request->email)->first();
    
        if (!$admin) {
            // Admin not found, handle accordingly
            // You might want to redirect back with an error message
            return redirect()->back()->with('error', 'Admin not found');
        }
    
        $dataToUpdate = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'middle_name' => $request->middle_name,
            'birthday' => $request->birthday,
            'contact_number' => $request->contact_number,
            'gender' => $request->gender,
            'address' => $request->address,
        ];
    
        // Update password only if a new password is provided
        if ($request->filled('new_password')) {
            $dataToUpdate['password'] = bcrypt($request->new_password);
        }
    
        $admin->update($dataToUpdate);
    
        // Log the user out after updating the password
        auth()->logout();
    
        // Redirect to login with a success message
        return redirect()->route('login')->with('success', 'Password updated successfully. Please log in with your new password.');
    }
    

    public function registrationPost(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'birthday' => 'required|date|before:' . now()->subYears(15)->format('Y-m-d'),
            'contact_number' => 'required|numeric',
            'gender' => 'required|in:male,female',
            'address' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);
    
        $profileImage = null; // Initialize to null
    
        // Handle image upload
        if ($image = $request->file('image')) {
            if ($image->isValid()) {
                $destinationPath = 'image/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
            } else {
                return back()->with('error', 'File upload error: ' . $image->getErrorMessage());
            }
        }
    
        $user = new User;
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->middle_name = $request->input('middle_name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->birthday = $request->input('birthday');
        $user->contact_number = $request->input('contact_number');
        $user->gender = $request->input('gender');
        $user->address = $request->input('address');
        $user->image = $profileImage; // Corrected variable name
        $user->role = 'user'; // Default role for registered users
       // Generate and send OTP
       $otp = rand(100000, 999999);
       $user->otp = $otp;
        $user->save();
        Mail::to($user->email)->send(new WelcomeMail($otp, $user->first_name));
        return redirect()->route('otp.verification', ['userId' => $user->id]);

        // return redirect()->route('login')->with('success', 'Registration successful. You can now log in.');
    }

    function logout(){
            // Session::flush();
            Auth::logout();
            return redirect()->route('login');
    }

    public function updateProfile(Request $request)
    {
        // Validate the incoming data
        $this->validate($request, [
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'address' => 'nullable|in:' . implode(',', User::ADDRESS_OPTIONS),
            'contact_number' => 'required|numeric',
            'gender' => 'nullable|in:male,female',
            'email' => 'nullable|email|unique:users,email,' . auth()->user()->id,
            'password' => 'nullable|min:8|confirmed',
            'current_password' => 'required_with:password',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg',
        ], [
            'password.min' => 'The new password must be at least 8 characters.',
            'password.confirmed' => 'The new password confirmation does not match.',
        ]);
    
        // Get the authenticated user
        $user = auth()->user();
    
        // Check if the current password is correct
        if ($request->filled('current_password') && !Hash::check($request->input('current_password'), $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }
    
        // Update the user's name, email, and additional fields
        $data = $request->except(['_token', 'image', 'password', 'current_password']); // Exclude unnecessary fields
        $user->update($data);
    
        // Handle image upload
        if ($image = $request->file('image')) {
            if ($image->isValid()) {
                $destinationPath = 'image/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $user->image = $profileImage;
            } else {
                return back()->with('error', 'File upload error: ' . $image->getErrorMessage());
            }
        }
    
        // Update the user's password if a new one was provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }
    
        // Save the user's updated information
        $user->save();
    
        // Redirect back with success or error message
        $message = $request->filled('password') ? 'Password changed successfully.' : 'Profile updated successfully.';
        return redirect()->back()->with('success', $message);
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


public function updateProfileSecretary(Request $request)
{
    $validator = Validator::make($request->all(), [
        'first_name' => 'required',
        'middle_name' => 'required',
        'last_name' => 'required',
        'contact_number' => 'required',
        'email' => 'required|email',
        'birthday' => 'required|date',
        'address' => 'required',
        'gender' => 'required',
        'new_password' => 'nullable|min:6|confirmed',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $secretary = User::where('email', $request->email)->first();

    if (!$secretary) {
        return redirect()->back()->with('error', 'Secretary not found');
    }

    $dataToUpdate = [
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'middle_name' => $request->middle_name,
        'birthday' => $request->birthday,
        'contact_number' => $request->contact_number,
        'gender' => $request->gender,
        'address' => $request->address,
    ];

    // Update password only if a new password is provided
    if ($request->filled('new_password')) {
        $dataToUpdate['password'] = bcrypt($request->new_password);
    }

    $secretary->update($dataToUpdate);

    // Optionally, you might want to redirect to the secretary's profile or a success page
    return redirect()->route('login')->with('success', 'Profile updated successfully.');
}






}





