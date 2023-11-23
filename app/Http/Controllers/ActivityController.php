<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    public function AddActivity(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
            'activity' => 'required',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg',
        ]);
    
        $emps = new Activity;
        $emps->description = $request->input('description');
        $emps->activity = $request->input('activity');
    
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
    
        return redirect('/adminpage/ManageActivity')->with('success', 'Data saved');
    }
    

    public function showActivity()
    {
        // Assuming 'user' is the role you want to filter
        $activities = Activity::get();
    
        return view('/adminpage/ManageActivity', compact('activities'));
    }


    public function showActivityHome()
    {
        // Assuming 'user' is the role you want to filter
        $activities = Activity::get();
    
        return view('/homepage/activities', compact('activities'));
    }




    public function deleteActivity($id)
    {
        $activities = Activity::find($id);
    
        if (!$activities) {
            return redirect()->route('adminpage.showActivity')->with("error", "Activity not found.");
        }
        $activities->delete();
        return redirect()->route('adminpage.showActivity')->with("success", "Activity deleted successfully.");
    }


}
