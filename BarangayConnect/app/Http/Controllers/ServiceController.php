<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->paginate(5);
  
        return view('adminpage.ManageServices',compact('services'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('adminpage.AddService');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
  
        Service::create($input);
   
        return redirect()->route('adminpage.index')
                        ->with('success','Services created successfully.');
    }


    public function destroy($id)
    {
      $service = Service::find($id);
      $service->delete();
      return redirect()->route('adminpage.index')
        ->with('success', 'Post deleted successfully');
    }


    public function edit($id)  
    {  
         $service = Service::find($id);  
         return view('adminpage.EditService', compact('service'));  
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Optional: Update image if provided
        ]);
    
        $service = Service::find($id); // Find the service by ID
        $service->name = $request->input('name');
        $service->detail = $request->input('detail');
    
        if ($request->hasFile('image')) {
            // Handle image upload if a new image is provided
            $image = $request->file('image');
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $service->image = $profileImage;
        }
    
        $service->save();
    
        return redirect()->route('adminpage.index')
                        ->with('success', 'Service updated successfully');
    }
    

  
}
