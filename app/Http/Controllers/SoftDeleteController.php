<?php

namespace App\Http\Controllers;

use App\Models\DocumentRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SoftDeleteController extends Controller
{
    public function deleting($id)
    {
        $document_request = DocumentRequest::find($id);

        if (!$document_request) {
            return redirect('/residentpage/transactions')->with('error', 'Document not found');
        }

        // Use soft delete
        $document_request->delete();

        return redirect('/residentpage/transactions')->with('success', 'Request has been soft-deleted successfully');
    }

    public function destroy($id)
    {
        $document_request = DocumentRequest::find($id);
    
        if (!$document_request) {
            return redirect()->route('requests.history')->with('error', 'Document request not found');
        }
    
        // Update the status to "deleted" instead of deleting the record
        $document_request->delete();

    
        return redirect()->route('requests.history')->with('success', 'Document request deleted successfully');
    }

}