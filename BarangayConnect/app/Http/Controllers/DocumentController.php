<?php

namespace App\Http\Controllers;
use App\Models\DocumentRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DocumentController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'purpose' => 'required',
            'id_number' => 'required',
            'document_type' => 'required|in:Barangay Indigency,Barangay Clearance,Barangay Business Permit',
            'id_type' => 'required|in:NSO with School ID,NBI Clearance,Voters ID,Drivers License,Voters Certificate,National ID,SSS',
        ]);
        $userId = Auth::id();
        $trackerNumber = uniqid();
        $emps = new DocumentRequest;
    
        $emps->full_name = $request->input('full_name');
        $emps->purpose = $request->input('purpose');
        $emps->id_number = $request->input('id_number');
        $emps->document_type = $request->input('document_type');
        $emps->id_type = $request->input('id_type'); // Use 'id_type' here
        $emps -> user_id = $userId;
        $emps -> tracker_number = $trackerNumber;
        $emps -> status = 'Pending'; #default status
        $emps->save();
    
        return redirect('/residentpage/TrackerNumber')->with('success', 'Data saved');
    }

    public function showTransactions()
    {
        $document_requests = DocumentRequest::where('user_id', Auth::user()->id)->orderBy('created_at')->paginate(5); // You can adjust this query as needed
    
        return view('/residentpage/transactions', compact('document_requests'));
    }

    public function destroy($id)
    {
        $document_request = DocumentRequest::find($id);
    
        if (!$document_request) {
            return redirect()->route('/residentpage/transactions')
                ->with('error', 'Document request not found');
        }
    
        $document_request->delete();
        return redirect('/residentpage/transactions')->with('success', 'Document request deleted successfully');
    }

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

}
