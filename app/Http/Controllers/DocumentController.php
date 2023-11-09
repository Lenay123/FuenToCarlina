<?php

namespace App\Http\Controllers;
use App\Models\DocumentRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DocumentController extends Controller
{

    public function store(Request $request)
    {
        $birthday = $request->input('birthday');
        
        $this->validate($request, [
            'full_name' => 'required',
            'purpose' => 'required',
            'id_number' => 'required',
            'business_name' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'document_type' => 'required|in:Barangay Indigency,Barangay Certificate,Barangay Business Permit,Barangay ID',
            'id_type' => 'required|in:NSO with School ID,NBI Clearance,Voters ID,Drivers License,Voters Certificate,National ID,SSS',
            'birthday' => 'required|date',
            'address' => 'required|in:Proper Nabunturan Barili Cebu,Sitio San Roque Nabunturan Barili Cebu,Sitio Cabinay Nabunturan Barili Cebu',
            'civil_status' => 'required|in:Single,Married,Widowed,Divorced',
            'document_date' => 'required|date|after_or_equal:today', // Ensure document_date is not in the past
            'document_date' => function ($attribute, $value, $fail) {
                $dayOfWeek = date('N', strtotime($value));
                if ($dayOfWeek >= 6) { // 6 is Saturday, 7 is Sunday
                    $fail('Weekends are not allowed for document pickup.');
                }
            },
        ]);
        
        $userId = Auth::id();
        $trackerNumber = uniqid();
        $emps = new DocumentRequest;
    
        $emps->full_name = $request->input('full_name');
        $emps->purpose = $request->input('purpose');
        $emps->id_number = $request->input('id_number');
        $emps->document_type = $request->input('document_type');
        $emps->business_name = $request->input('business_name');
        $emps->id_type = $request->input('id_type');
        $emps->user_id = $userId;
        $emps->tracker_number = $trackerNumber;
        $emps->status = 'Pending'; // Default status
        $emps->birthday = $birthday;
        $emps->address = $request->input('address');
        $emps->document_date = $request->input('document_date'); // Assign the document_date field
    
        if ($image = $request->file('image')) {
            if ($image->isValid()) {
                $destinationPath = 'image/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $emps->image = $profileImage; // Set the image property of the model
            } else {
                return back()->with('error', 'File upload error: ' . $image->getErrorMessage());
            }
        }
        
    
        $emps->save();
    
        return redirect('/residentpage/TrackerNumber')->with('success', 'Data saved');
    }
    

public function showTransactions()
{
    $document_requests = DocumentRequest::where('user_id', Auth::user()->id)
        ->orderBy('created_at', 'desc') // Order by created_at in descending order
        ->get();
    
    return view('/residentpage/transactions', compact('document_requests'));
}


    // public function destroy($id)
    // {
    //     $document_request = DocumentRequest::find($id);
    
    //     if (!$document_request) {
    //         return redirect()->route('/residentpage/transactions')
    //             ->with('error', 'Document request not found');
    //     }
    
    //     $document_request->delete();
    //     return redirect('/residentpage/transactions')->with('success', 'Document request deleted successfully');
    // }

    public function showTrackerNumber()
    {
        $tracker_number = DocumentRequest::latest('tracker_number')->first(); // You can adjust this query as needed
    
        return view('/residentpage/TrackerNumber', compact('tracker_number'));
    }
    public function cancel(DocumentRequest $document_request)
    {
        $document_request->update(['status' => 'cancelled']);
        return redirect('/residentpage/transactions')->with('success', 'Request has been cancelled successfully');
    }


    public function barangayCertificate()
    {
        return view('residentpage.barangayCertificate');
    }

    public function barangayIndigency()
    {
        return view('residentpage.barangayIndigency');
    }

    public function barangayBusinessPermit()
    {
        return view('residentpage.barangayBusinessPermit');
    }

    public function account()
    {
        return view('residentpage.Account');
    }

    public function barangayID()
    {
        return view('residentpage.barangayID');
    }

    public function showStatus()
    {
        // Get the authenticated user
        $user = auth()->user();
    
        // Retrieve the document requests for the current user and group them by status
        $document_requests = DocumentRequest::where('user_id', $user->id)
            ->select('status', \DB::raw('count(*) as count'))
            ->groupBy('status')
            ->get();
    
        return view('residentpage.resident', compact('document_requests'));
    }

}