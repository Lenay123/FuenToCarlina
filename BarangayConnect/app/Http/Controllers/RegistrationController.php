<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('homepage.register');
    }

    public function registration(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'birthday' => 'required|date',
            'contact_number' => 'required|string|max:20',
            'gender' => 'required|in:male,female',
            'address' => 'required|in:Proper Nabunturan Barili Cebu, Sitio San Roque Nabunturan Barili Cebu, Sitio Cabinay Nabunturan Barili Cebu',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
        } else {
            $imagePath = null;
        }

        User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'middle_name' => $request->input('middle_name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'birthday' => $request->input('birthday'),
            'contact_number' => $request->input('contact_number'),
            'gender' => $request->input('gender'),
            'address' => $request->input('address'),
            'image' => $imagePath,
            'role' => 'user', // Default role for registered users
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. You can now log in.');
    }   


    public function showResident()
    {
        $users = User::all();
     
        return view('/adminpage/ManageResidents', compact('users'));
    }


    public function createResident()
    {
        return view('adminpage.AddSecretary');
    }
    
    public function storeResident(Request $request)
    {

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'email' => 'required|email|unique:secretaries',
            'password' => 'required|string|min:8|confirmed',
            'birthday' => 'required|date',
            'contact_number' => 'required|string|max:20',
            'gender' => 'required|in:male,female',
            'address' => 'required|in:' . implode(',', User::ADDRESS_OPTIONS), // Use the options from the model
        ]);        

   $user= User::create([
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        'middle_name' => $request->input('middle_name'),
        'email' => $request->input('email'),
        'password' => Hash::make($request->input('password')),
        'birthday' => $request->input('birthday'),
        'contact_number' => $request->input('contact_number'),
        'gender' => $request->input('gender'),
        'address' => $request->input('address'),
        'role' => 'user', // Default role for registered users
    ]);
    if(!$user){
        return redirect(route('/adminpage/AddResident'))->with("error", "Try again");
    }
    return redirect()->route('adminpage.storeResident')->with("success", "Resident is added successfully");
    }




    public function deleteResident($id)
    {
        $user = User::find($id);
    
        if (!$user) {
            return redirect()->route('adminpage.ManageResidents')->with("error", "Resident not found.");
        }
        $user->delete();
        return redirect()->route('adminpage.ManageResidents')->with("success", "Resident deleted successfully.");
    }

  public function editResident($id) {
        $user = User::find($id);
    
        if (!$user) {
            return redirect()->route('adminpage.ManageResidents')->with("error", "Resident not found.");
        }
    
        return view('adminpage.EditResident', compact('user'));
    }
    
    public function updateResident(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'email' => 'required|email|unique:secretaries,email,' . $id,
            'birthday' => 'required|date',
            'contact_number' => 'required|string|max:20',
            'gender' => 'required|in:male,female',
            'address' => 'required|in:' . implode(',', User::ADDRESS_OPTIONS), // Use the options from the model
        ]);
    
        $user = User::find($id); // Find the secretary by ID
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->middle_name = $request->input('middle_name');
        $user->email = $request->input('email');
        $user->birthday = $request->input('birthday');
        $user->contact_number = $request->input('contact_number');
        $user->gender = $request->input('gender');
        $user->address = $request->input('address');
    
        $user->save();
    
        return redirect()->route('adminpage.ManageResidents')
                        ->with('success', 'Resident updated successfully');
    }



    public function storeSecretary(Request $request)
    {

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'email' => 'required|email|unique:secretaries',
            'password' => 'required|string|min:8|confirmed',
            'birthday' => 'required|date',
            'contact_number' => 'required|string|max:20',
            'gender' => 'required|in:male,female',
            'address' => 'required|in:' . implode(',', User::ADDRESS_OPTIONS), // Use the options from the model
        ]);        

   $secretary= User::create([
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        'middle_name' => $request->input('middle_name'),
        'email' => $request->input('email'),
        'password' => Hash::make($request->input('password')),
        'birthday' => $request->input('birthday'),
        'contact_number' => $request->input('contact_number'),
        'gender' => $request->input('gender'),
        'address' => $request->input('address'),
        'role' => 'secretary', // Default role for registered users
    ]);
    if(!$secretary){
        return redirect(route('/adminpage/AddSecretary'))->with("error", "Try again");
    }
    return redirect()->route('adminpage.storeSecretary')->with("success", "Secretary is added successfully");
    }

    public function createSecretary()
{
    return view('adminpage.AddSecretary');
}

public function showSecretary()
{
    // Assuming 'secretary' is the value in the 'roles' field for secretaries
    $secretaries = User::where('role', 'secretary')->get();

    return view('/adminpage/ManageSecretary', compact('secretaries'));
}

    public function deleteSecretary($id)
    {
        $secretary = User::find($id);
    
        if (!$secretary) {
            return redirect()->route('adminpage.ManageSecretary')->with("error", "Secretary not found.");
        }
        $secretary->delete();
        return redirect()->route('adminpage.ManageSecretary')->with("success", "Secretary deleted successfully.");
    }

  public function editSecretary($id) {
        $secretary = User::find($id);
    
        if (!$secretary) {
            return redirect()->route('adminpage.ManageSecretary')->with("error", "Secretary not found.");
        }
    
        return view('adminpage.EditSecretary', compact('secretary'));
    }
    
    public function updateSecretary(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'email' => 'required|email|unique:secretaries,email,' . $id,
            'birthday' => 'required|date',
            'contact_number' => 'required|string|max:20',
            'gender' => 'required|in:male,female',
            'address' => 'required|in:' . implode(',', User::ADDRESS_OPTIONS), // Use the options from the model
        ]);
    
        $secretary = User::find($id); // Find the secretary by ID
        $secretary->first_name = $request->input('first_name');
        $secretary->last_name = $request->input('last_name');
        $secretary->middle_name = $request->input('middle_name');
        $secretary->email = $request->input('email');
        $secretary->birthday = $request->input('birthday');
        $secretary->contact_number = $request->input('contact_number');
        $secretary->gender = $request->input('gender');
        $secretary->address = $request->input('address');
    
        $secretary->save();
    
        return redirect()->route('adminpage.ManageSecretary')
                        ->with('success', 'Secretary updated successfully');
    }
}
