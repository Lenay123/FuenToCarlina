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
                        ->with('success','Product created successfully.');
    }

    public function edit(Service $service)
    {
        return view('adminpage.EditService',compact('service'));
    }

    public function destroy($id)
    {
      $service = Service::find($id);
      $service->delete();
      return redirect()->route('adminpage.index')
        ->with('success', 'Post deleted successfully');
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
        
        $service->update($input);
  
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }
 

  
}
