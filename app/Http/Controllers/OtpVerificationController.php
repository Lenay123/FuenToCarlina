<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Models\User;
use App\Http\Controllers\Controller;
class OtpVerificationController extends Controller
{
    public function show($userId)
    {
        // Fetch the user by ID
        $user = Auth::loginUsingId($userId);

        // You can pass the user data to your view if needed
        return view('homepage/otp_verification', compact('user'));
    }


    public function verifyOtp(Request $request, $userId)
    {
        $user = Auth::loginUsingId($userId);
        
        $request->validate([
            'otp' => 'required|array|min:6|max:6',
        ]);
        
        // Concatenate the array elements into a string
        $otpString = implode('', $request->input('otp'));
        
        if ($otpString == $user->otp) {
            $user->otp = null;
            $user->email_verified_at = now();
            $user->save();
    
            // Log in the user
            Auth::login($user);
    
            // Flash a success message to the session
            session()->flash('success', 'Account successfully verified.');
    
            return redirect('/login'); // Redirect to the home page or wherever you want after verification
        }
    
        // If OTP is invalid, flash an error message to the session
        session()->flash('error', 'Invalid OTP');
    
        return back()->withErrors(['otp' => 'Invalid OTP']);
    }


    public function resendCode($userId)
    {
        $user = User::findOrFail($userId);
    
        // Generate a new verification code and save it to the user
        $newCode = mt_rand(100000, 999999);
        $user->otp = $newCode;
        $user->save();
    
        // Send the new code to the user via email
        Mail::to($user->email)->send(new WelcomeMail($newCode, $user->first_name));
    
        return redirect()->back()->with('success', 'Verification code resent successfully!');
    }
    
}    
