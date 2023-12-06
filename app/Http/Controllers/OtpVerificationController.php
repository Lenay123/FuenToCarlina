<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Http\Controllers\Controller;
class OtpVerificationController extends Controller
{
    public function show($userId)
    {
        // Fetch the user by ID
        $user = User::findOrFail($userId);

        // You can pass the user data to your view if needed
        return view('homepage/otp_verification', compact('user'));
    }
}
