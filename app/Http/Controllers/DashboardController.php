<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Secretary;
use App\Models\DocumentRequest;
use App\Models\AdminUser;
class DashboardController extends Controller
{
    public function showCount()
    {
        $userCount = User::where('role', 'user')->count();
        $secretaryCount = User::where('role', 'secretary')->count();
        $adminCount = AdminUser::count();
        
        // Count all document requests
        $totalDocumentRequests = DocumentRequest::count();
        $percentageGrowth = ($totalDocumentRequests > 0) ? 62 * ($totalDocumentRequests / 100) : 0;
            // Fetch data from the database, grouped by status
            $statusCounts = DocumentRequest::select('status', \DB::raw('count(*) as count'))
                ->groupBy('status')
                ->get();
        // Count document requests based on document type
        $document_requests = DocumentRequest::select('document_type', \DB::raw('count(*) as count'))
            ->groupBy('document_type')
            ->get();
    
        return view('/adminpage/AdminDashboard', compact('userCount', 'secretaryCount', 'adminCount', 'totalDocumentRequests', 'document_requests', 'percentageGrowth', 'statusCounts'));
        
    }
    

        // Dashboard count for secretary

        public function showCountSecretary()
        {
            $totalDocumentRequests = DocumentRequest::count();
            $percentageGrowth = ($totalDocumentRequests > 0) ? 62 * ($totalDocumentRequests / 100) : 0;
        
            $document_requests = DocumentRequest::select('document_type', \DB::raw('count(*) as count'))
                ->groupBy('document_type')
                ->get();
        
            // Fetch data from the database, grouped by status
            $statusCounts = DocumentRequest::select('status', \DB::raw('count(*) as count'))
                ->groupBy('status')
                ->get();
        
            // Fetch the latest document requests
            $latestDocumentRequests = DocumentRequest::latest()->get();
        
            // Fetch the first 5 document requests
            $first5DocumentRequests = DocumentRequest::latest()->take(5)->get();
        
            // You can add a variable to check if there's a new request
            $isNewRequest = false;
        
            if ($latestDocumentRequests->isNotEmpty()) {
                $latestRequest = $latestDocumentRequests[0];
                $requestorName = $latestRequest->full_name;
                $requestedDocument = $latestRequest->document_type;
                $requestedTracker = $latestRequest->tracker_number;
        
                // Check if the request is very recent (e.g., within a minute)
                $isNewRequest = $latestRequest->created_at->gt(now()->subMinute());
            } else {
                $requestorName = 'Unknown Requestor';
                $requestedDocument = 'Unknown Document';
            }
        
            return view('/secretary/secretary_dashboard', compact('totalDocumentRequests', 'percentageGrowth', 'document_requests', 'latestDocumentRequests', 'first5DocumentRequests', 'requestorName', 'requestedDocument', 'isNewRequest', 'statusCounts'));
        }
        

        public function showBarangayIndigencyRequests()
        {
            $document_requests = DocumentRequest::where('document_type', 'Barangay Indigency')
                ->whereNotIn('status', ['delete', 'deleted']) // Exclude records with "delete" and "deleted" statuses
                ->get();
        
            $latestDocumentRequests = DocumentRequest::where('document_type', 'Barangay Indigency')
                ->whereNotIn('status', ['delete', 'deleted']) // Exclude records with "delete" and "deleted" statuses
                ->latest()
                ->get();
        
            // You can add a variable to check if there's a new request
            $isNewRequest = false;
        
            if ($latestDocumentRequests->isNotEmpty()) {
                $latestRequest = $latestDocumentRequests[0];
                $requestorName = $latestRequest->full_name;
                $requestedDocument = $latestRequest->document_type;
                $requestedTracker = $latestRequest->tracker_number;
        
                // Check if the request is very recent (e.g., within a minute)
                $isNewRequest = $latestRequest->created_at->gt(now()->subMinute());
            } else {
                $requestorName = 'Unknown Requestor';
                $requestedDocument = 'Unknown Document';
            }
            
        
            return view('secretary.manageIndigencyRequest', compact('document_requests', 'latestDocumentRequests', 'requestorName', 'requestedDocument', 'isNewRequest'));
        }
        
    
    public function showBarangayCertificateRequests()
    {
        $document_requests = DocumentRequest::where('document_type', 'Barangay Certificate')
            ->whereNotIn('status', ['delete', 'deleted']) // Exclude records with "delete" and "deleted" statuses
            ->get();
    
        $latestDocumentRequests = DocumentRequest::where('document_type', 'Barangay Certificate')
            ->whereNotIn('status', ['delete', 'deleted']) // Exclude records with "delete" and "deleted" statuses
            ->latest()
            ->get();
    
        // You can add a variable to check if there's a new request
        $isNewRequest = false;
    
        if ($latestDocumentRequests->isNotEmpty()) {
            $latestRequest = $latestDocumentRequests[0];
            $requestorName = $latestRequest->full_name;
            $requestedDocument = $latestRequest->document_type;
            $requestedTracker = $latestRequest->tracker_number;
    
            // Check if the request is very recent (e.g., within a minute)
            $isNewRequest = $latestRequest->created_at->gt(now()->subMinute());
        } else {
            $requestorName = 'Unknown Requestor';
            $requestedDocument = 'Unknown Document';
        }
    
        return view('secretary.manageCertificateRequest', compact('document_requests', 'latestDocumentRequests', 'requestorName', 'requestedDocument', 'isNewRequest'));
    }
    

    public function showBarangayIDRequests()
    {
        $document_requests = DocumentRequest::where('document_type', 'Barangay ID')
            ->whereNotIn('status', ['delete', 'deleted']) // Exclude records with "delete" and "deleted" statuses
            ->get();
    
        $latestDocumentRequests = DocumentRequest::where('document_type', 'Barangay ID')
            ->whereNotIn('status', ['delete', 'deleted']) // Exclude records with "delete" and "deleted" statuses
            ->latest()
            ->get();
    
        // You can add a variable to check if there's a new request
        $isNewRequest = false;
    
        if ($latestDocumentRequests->isNotEmpty()) {
            $latestRequest = $latestDocumentRequests[0];
            $requestorName = $latestRequest->full_name;
            $requestedDocument = $latestRequest->document_type;
            $requestedTracker = $latestRequest->tracker_number;
    
            // Check if the request is very recent (e.g., within a minute)
            $isNewRequest = $latestRequest->created_at->gt(now()->subMinute());
        } else {
            $requestorName = 'Unknown Requestor';
            $requestedDocument = 'Unknown Document';
        }
    
        return view('secretary.manageIdRequest', compact('document_requests', 'latestDocumentRequests', 'requestorName', 'requestedDocument', 'isNewRequest'));
    }
    

    public function showBarangayBusinessPermitRequests()
    {
        $document_requests = DocumentRequest::where('document_type', 'Barangay Business Permit')
            ->whereNotIn('status', ['delete', 'deleted']) // Exclude records with "delete" and "deleted" statuses
            ->get();
    
        $latestDocumentRequests = DocumentRequest::where('document_type', 'Barangay Business Permit')
            ->whereNotIn('status', ['delete', 'deleted']) // Exclude records with "delete" and "deleted" statuses
            ->latest()
            ->get();
    
        // You can add a variable to check if there's a new request
        $isNewRequest = false;
    
        if ($latestDocumentRequests->isNotEmpty()) {
            $latestRequest = $latestDocumentRequests[0];
            $requestorName = $latestRequest->full_name;
            $requestedDocument = $latestRequest->document_type;
            $requestedTracker = $latestRequest->tracker_number;
    
            // Check if the request is very recent (e.g., within a minute)
            $isNewRequest = $latestRequest->created_at->gt(now()->subMinute());
        } else {
            $requestorName = 'Unknown Requestor';
            $requestedDocument = 'Unknown Document';
        }
    
        return view('secretary.manageBusinessPermitRequest', compact('document_requests', 'latestDocumentRequests', 'requestorName', 'requestedDocument', 'isNewRequest'));
    }

    
    public function showAllTransactions()
    {
        $document_requests = DocumentRequest::whereIn('status', ['Claimed', 'cancelled', 'delete'])->get();
        $latestDocumentRequests = DocumentRequest::latest()->get();
        
        // You can add a variable to check if there's a new request
        $isNewRequest = false;
    
        if ($latestDocumentRequests->isNotEmpty()) {
            $latestRequest = $latestDocumentRequests[0];
            $requestorName = $latestRequest->full_name;
            $requestedDocument = $latestRequest->document_type;
            $requestedTracker = $latestRequest->tracker_number;
    
            // Check if the request is very recent (e.g., within a minute)
            $isNewRequest = $latestRequest->created_at->gt(now()->subMinute());
        } else {
            $requestorName = 'Unknown Requestor';
            $requestedDocument = 'Unknown Document';
        }
        return view('secretary.request_history', compact('document_requests', 'latestDocumentRequests', 'requestorName', 'requestedDocument','isNewRequest'));
    }

    public function destroy($id)
    {
        $document_request = DocumentRequest::find($id);
    
        if (!$document_request) {
            return redirect()->route('requests.history')->with('error', 'Document request not found');
        }
    
        // Update the status to "deleted" instead of deleting the record
        $document_request->update(['status' => 'deleted']);
    
        return redirect()->route('requests.history')->with('success', 'Document request deleted successfully');
    }
    

    public function showBarangayIndigencyTransaction()
    {
    $document_requests = DocumentRequest::where('document_type', 'Barangay Indigency')->get();

    return view('adminpage.BarangayIndigencyTransaction', compact('document_requests'));

    }

    public function showBarangayCertificateTransaction()
    {
    $document_requests = DocumentRequest::where('document_type', 'Barangay Certificate')->get();

    return view('adminpage.BarangayCertificateTransaction', compact('document_requests'));

    }

    public function showBarangayIDTransaction()
    {
    $document_requests = DocumentRequest::where('document_type', 'Barangay ID')->get();

    return view('adminpage.BarangayIDTransaction', compact('document_requests'));

    }

    public function showBarangayPermitTransaction()
    {
        $document_requests = DocumentRequest::where('document_type', 'Barangay Business Permit')
            ->whereNotIn('status', ['delete', 'deleted']) // Exclude records with "delete" and "deleted" statuses
            ->get();
    
        return view('adminpage.BarangayPermitTransaction', compact('document_requests'));
    }
    
    // change of status
   
    public function claimDocument(DocumentRequest $document_request)
{
    $document_request->update([
        'status' => 'Claimed',
]);

    return redirect()->back()->with('success', 'Document marked as claimed');
}

public function claimDocumentPermit(DocumentRequest $document_request)
{
    $document_request->update([
        'status' => 'Claimed',
]);

    return redirect()->back()->with('success', 'Document marked as claimed');
}
}
