<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocumentRequest;

class StatusController extends Controller
{
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
