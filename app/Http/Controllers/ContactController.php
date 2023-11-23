<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;
use App\Mail\UserContactFormSubmitted;


class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
    
        try {
            // Save the form submission to the database
            $submission = new Contact([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'subject' => $request->input('subject'),
                'message' => $request->input('message'),
            ]);
    
            $submission->save();
    
            // Set success message in session
            Session::flash('success', 'Your message has been sent! Thank you.');
    
            return redirect()->route('contact');
        } catch (\Exception $e) {
            // Set error message in session
            Session::flash('error', 'Something went wrong. Please try again.');
    
            return redirect()->back();
        }
    }
    

    public function contact()
    {
        return view('homepage.contact');
    }

}
