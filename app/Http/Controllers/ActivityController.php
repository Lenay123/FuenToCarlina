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

    public function updateActivity(Request $request, $id)
    {
        // Validation rules
        $this->validate($request, [
            'activity' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg',
        ]);
    
        // Find the record to update
        $activity = Activity::findOrFail($id);
    
        // Check if the record exists
        if (!$activity) {
            return back()->with('error', 'Record not found');
        }
    
        // Update attributes
        $data = $request->except(['_token', 'image']); // Exclude unnecessary fields
        $activity->update($data);
    
        // Handle image upload
        if ($image = $request->file('image')) {
            if ($image->isValid()) {
                $destinationPath = 'image/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $activity->image = $profileImage;
                $activity->save(); // Save again after updating image
            } else {
                return back()->with('error', 'File upload error: ' . $image->getErrorMessage());
            }
        }
    
        return redirect('/adminpage/ManageActivity')->with('success', 'Data updated');
    }


    public function editActivity($id) {
        $activity = Activity::find($id);
    
        if (!$activity) {
            return redirect()->route('adminpage.ManageActivity')->with("error", "Activity not found.");
        }
    
        return view('adminpage.EditActivity', compact('activity'));
    }
    

}
