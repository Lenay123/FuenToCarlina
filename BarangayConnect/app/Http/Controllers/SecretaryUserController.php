<?php

namespace App\Http\Controllers;
use App\Models\Secretary;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SecretaryUserController extends Controller
{
    public function createSecretary()
    {
        return view('adminpage.AddSecretary');
    }
    
//     public function storeSecretary(Request $request)
//     {

//         $request->validate([
//             'first_name' => 'required|string|max:255',
//             'last_name' => 'required|string|max:255',
//             'middle_name' => 'nullable|string|max:255',
//             'email' => 'required|email|unique:secretaries',
//             'password' => 'required|string|min:8|confirmed',
//             'birthday' => 'required|date',
//             'contact_number' => 'required|string|max:20',
//             'gender' => 'required|in:male,female',
//             'address' => 'required|in:' . implode(',', Secretary::ADDRESS_OPTIONS), // Use the options from the model
//         ]);        

//    $secretary= Secretary::create([
//         'first_name' => $request->input('first_name'),
//         'last_name' => $request->input('last_name'),
//         'middle_name' => $request->input('middle_name'),
//         'email' => $request->input('email'),
//         'password' => Hash::make($request->input('password')),
//         'birthday' => $request->input('birthday'),
//         'contact_number' => $request->input('contact_number'),
//         'gender' => $request->input('gender'),
//         'address' => $request->input('address'),
//         'role' => 'secretary', // Default role for registered users
//     ]);
//     if(!$secretary){
//         return redirect(route('/adminpage/AddSecretary'))->with("error", "Try again");
//     }
//     return redirect()->route('adminpage.storeSecretary')->with("success", "Secretary is added successfully");
//     }

//     public function showSecretary()
//     {
//         $secretaries = Secretary::all();
     
//         return view('/adminpage/ManageSecretary', compact('secretaries'));
//     }

//     public function deleteSecretary($id)
//     {
//         $secretary = Secretary::find($id);
    
//         if (!$secretary) {
//             return redirect()->route('adminpage.ManageSecretary')->with("error", "Secretary not found.");
//         }
//         $secretary->delete();
//         return redirect()->route('adminpage.ManageSecretary')->with("success", "Secretary deleted successfully.");
//     }

//   public function editSecretary($id) {
//         $secretary = Secretary::find($id);
    
//         if (!$secretary) {
//             return redirect()->route('adminpage.ManageSecretary')->with("error", "Secretary not found.");
//         }
    
//         return view('adminpage.EditSecretary', compact('secretary'));
//     }
    
//     public function updateSecretary(Request $request, $id)
//     {
//         $request->validate([
//             'first_name' => 'required|string|max:255',
//             'last_name' => 'required|string|max:255',
//             'middle_name' => 'nullable|string|max:255',
//             'email' => 'required|email|unique:secretaries,email,' . $id,
//             'birthday' => 'required|date',
//             'contact_number' => 'required|string|max:20',
//             'gender' => 'required|in:male,female',
//             'address' => 'required|in:' . implode(',', Secretary::ADDRESS_OPTIONS), // Use the options from the model
//         ]);
    
//         $secretary = Secretary::find($id); // Find the secretary by ID
//         $secretary->first_name = $request->input('first_name');
//         $secretary->last_name = $request->input('last_name');
//         $secretary->middle_name = $request->input('middle_name');
//         $secretary->email = $request->input('email');
//         $secretary->birthday = $request->input('birthday');
//         $secretary->contact_number = $request->input('contact_number');
//         $secretary->gender = $request->input('gender');
//         $secretary->address = $request->input('address');
    
//         $secretary->save();
    
//         return redirect()->route('adminpage.ManageSecretary')
//                         ->with('success', 'Secretary updated successfully');
//     }
    


}
