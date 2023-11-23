<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Officials;
use Illuminate\Validation\Rule;
use App\Models\User;

class OfficialController extends Controller
{
    public function AddOfficials(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'contact_number' => 'required',
            'birthday' => 'required|date',
            'email' => 'required|email|unique:officials,email|unique:users,email', // Check for unique email in both tables
            'address' => 'required|in:Proper Nabunturan Barili Cebu,Sitio San Roque Nabunturan Barili Cebu,Sitio Cabinay Nabunturan Barili Cebu',
            'gender' => 'nullable|in:male,female',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg',
            'position' => 'required|in:Barangay Kagawad,Barangay Captain,Barangay Secretary,Barangay Treasurer,SK Chairman',
        ]);
    
        // Check if email already exists in either table
        if (Officials::where('email', $request->input('email'))->exists() || User::where('email', $request->input('email'))->exists()) {
            return back()->with('error', 'Email already exists. Please use a different email.');
        }
    
        $emps = new Officials;
    
        $emps->first_name = $request->input('first_name');
        $emps->middle_name = $request->input('middle_name');
        $emps->last_name = $request->input('last_name');
        $emps->contact_number = $request->input('contact_number');
        $emps->birthday = $request->input('birthday');
        $emps->address = $request->input('address');
        $emps->position = $request->input('position'); // Fix the typo here from 'poistion' to 'position'
        $emps->gender = $request->input('gender');
        $emps->email = $request->input('email');
    
        if ($image = $request->file('image')) {
            if ($image->isValid()) {
                $destinationPath = 'image/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $emps->image = $profileImage;
            } else {
                return back()->with('error', 'File upload error: ' . $image->getErrorMessage());
            }
        }
    
        $emps->save();
    
        return redirect('/adminpage/ManageOfficials')->with('success', 'Data saved');
    }
    
    
    public function showOfficials()
    {
        // Assuming 'user' is the role you want to filter
        $officials = Officials::get();
    
        return view('/adminpage/ManageOfficials', compact('officials'));
    }

    public function showOfficialsHome()
    {
        // Assuming 'user' is the role you want to filter
        $officials = Officials::get();
    
        return view('/homepage/barangayofficials', compact('officials'));
    }
    
    public function updateOfficials(Request $request, $id)
    {
        // Validation rules
        $this->validate($request, [
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'contact_number' => 'required',
            'birthday' => 'required|date',
            'email' => 'required|email',
            'address' => 'required|in:Proper Nabunturan Barili Cebu,Sitio San Roque Nabunturan Barili Cebu,Sitio Cabinay Nabunturan Barili Cebu',
            'gender' => 'nullable|in:male,female',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg',
            'position' => 'required|in:Barangay Kagawad,Barangay Captain,Barangay Secretary,Barangay Treasurer,SK Chairman',
        ]);
    
        // Find the record to update
        $official = Officials::findOrFail($id);
    
        // Check if the record exists
        if (!$official) {
            return back()->with('error', 'Record not found');
        }
    
        // Update attributes
        $data = $request->except(['_token', 'image']); // Exclude unnecessary fields
        $official->update($data);
    
        // Handle image upload
        if ($image = $request->file('image')) {
            if ($image->isValid()) {
                $destinationPath = 'image/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $official->image = $profileImage;
                $official->save(); // Save again after updating image
            } else {
                return back()->with('error', 'File upload error: ' . $image->getErrorMessage());
            }
        }
    
        return redirect('/adminpage/ManageOfficials')->with('success', 'Data updated');
    }

}
