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
class ForgotPassword extends Controller
{
    public function showForgetPasswordForm()
    {
       return view('homepage.resetpassword');
    }
    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);
    
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

    $resetPasswordEntry = DB::table('reset_password')
        ->where('email', $request->email)
        ->where('token', $request->token)
        ->whereNull('used_at') // Check if the token is not used
        ->where('expires_at', '>', now()) // Check if the token is still valid
        ->first();

    if (!$resetPasswordEntry) {
        return redirect()->back()->withInput()->with('error', 'Invalid or expired token!');
    }

    // Update the user's password
    $user = User::where('email', $request->email)
        ->update(['password' => Hash::make($request->password)]);

    // Mark the token as used
    DB::table('reset_password')
        ->where('email', $request->email)
        ->where('token', $request->token)
        ->update(['used_at' => now()]);

    // Redirect to the login page with a success message
    return redirect('/homepage/login')->with('alert', 'Your password has been changed!');
}

    
}
