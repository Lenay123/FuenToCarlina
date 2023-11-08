<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocumentRequest;

class StatusController extends Controller
{
    // public function showStatuses()
    // {
    //     // Replace this with your logic to retrieve requests in progress
    //     $document_requests1 = DocumentRequest::whereIn('status', ['Pending'])->get();
    //     $document_requests2 = DocumentRequest::whereIn('status', ['cancelled'])->get();
    //     $document_requests3 = DocumentRequest::whereIn('status', ['In Progress'])->get();
    //     $document_requests4 = DocumentRequest::whereIn('status', ['Claimed'])->get();
    //     return view('adminpage/AdminTransaction', [
    //         'document_requests1' => $document_requests1,
    //         'document_requests2' => $document_requests2,
    //         'document_requests3' => $document_requests3,
    //         'document_requests4' => $document_requests4,
    
    // ]);
    // }
    public function deleteTransaction($id)
    {
        $document_request = DocumentRequest::find($id);
    
        if (!$document_request) {
            return redirect()->route('adminpage.deleteTransaction', ['id' => $id])
                ->with('error', 'Document request not found');
        }
    
        $document_request->delete();
    
        return redirect()->route('adminpage.deleteTransaction', ['id' => $id])
            ->with('success', 'Document request deleted successfully');
    }
    
}
