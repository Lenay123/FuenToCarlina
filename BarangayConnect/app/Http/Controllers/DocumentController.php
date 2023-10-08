<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'ID' => 'required',
            'message' => 'required',
        ]);

        // Process the form data as needed (e.g., save it to the database)

        // Redirect back to the form with a success message
        return redirect()->route('request-form')->with('success', 'Form submitted successfully.');
    }
}
