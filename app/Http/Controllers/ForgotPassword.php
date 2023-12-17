<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use DB; 
use Hash;
use Carbon\Carbon; 
use App\Models\User; 
use Mail; 
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\View;

class ForgotPassword extends Controller
{
    public function showForgetPasswordForm()
    {
       return view('homepage.resetpassword');
    }

    public function submitForgetPasswordForm(Request $request)
    {
        // Validate the email format and check if it exists in the users table
        $validator = Validator::make($request->all(), [
            'email' => [
                'required',
                'email',
                Rule::exists('users')->where(function ($query) use ($request) {
                    $query->where('email', $request->email);
                }),
            ],
        ]);
    
        if ($validator->fails()) {
            // Set a custom session variable to indicate invalid email
            session()->flash('invalidEmail', 'Invalid email address.');
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $token = Str::random(64);
    
        // Set the expiration time to, for example, 1 hour from now
        $expirationTime = now()->addHour();
    
        DB::table('reset_password')->insert([
            'email' => $request->email,
            'token' => $token,
            'expires_at' => $expirationTime,
            'created_at' => now(),
        ]);
    
        Mail::send('emails.forgetPassword', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
        });
    
        return redirect()->back()->with('alert', 'We have e-mailed your password reset link!');
    }
    
    
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function showResetPasswordForm($token) { 
       return view('homepage.resetpassword', ['token' => $token]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
public function submitResetPasswordForm(Request $request)
{
    $request->validate([
        'email' => 'required|email|exists:users',
        'password' => 'required|string|min:6|confirmed',
    ]);

    // Check if the reset password entry is valid
    $resetPasswordEntry = DB::table('reset_password')
        ->where('email', $request->email)
        ->where('token', $request->token)
        ->whereNull('used_at') // Check if the token is not used
        ->where('expires_at', '>', now()) // Check if the token is still valid
        ->first();

    if (!$resetPasswordEntry) {
        return redirect()->back()->withInput()->with('error', 'Invalid or expired token!');
    }

    // Find the user associated with the email and token
    $user = User::where('email', $request->email)
        ->where('reset_password_token', $request->token)
        ->first();

    // Verify that the user with the specific token exists
    if (!$user) {
        return redirect()->back()->withInput()->with('error', 'Invalid email address or token!');
    }

    // Update the user's password
    $user->update(['password' => Hash::make($request->password)]);

    // Mark the token as used
    DB::table('reset_password')
        ->where('email', $request->email)
        ->where('token', $request->token)
        ->update(['used_at' => now()]);

    // Redirect to the login page with a success message
    return redirect('/homepage/login')->with('alert', 'Your password has been changed!');
}

    
}
