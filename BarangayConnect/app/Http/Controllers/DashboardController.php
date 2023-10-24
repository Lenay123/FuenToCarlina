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
        $user = User::count();
        $secretaries = Secretary::count();
        $admin = AdminUser::count();
        $document_requests = DocumentRequest::select('document_type', \DB::raw('count(*) as count'))
        ->groupBy('document_type')
        ->get();


        return view('/adminpage/AdminDashboard', compact('user', 'secretaries', 'document_requests', 'admin'));
    }

        // Dashboard count for secretary

    public function showCountSecretary()
    {
        $document_requests = DocumentRequest::select('document_type', \DB::raw('count(*) as count'))
            ->groupBy('document_type')
            ->get();


        return view('/secretary/secretary_dashboard', compact('document_requests'));
    }

    
    public function showBarangayIndigencyRequests()
    {
    $document_requests = DocumentRequest::where('document_type', 'Barangay Indigency')->get();

    return view('secretary.manageIndigencyRequest', compact('document_requests'));

    }

    public function showBarangayCertificateRequests()
    {
    $document_requests = DocumentRequest::where('document_type', 'Barangay Certificate')->get();

    return view('secretary.manageCertificateRequest', compact('document_requests'));

    }

    public function showBarangayIDRequests()
    {
    $document_requests = DocumentRequest::where('document_type', 'Barangay ID')->get();

    return view('secretary.manageIdRequest', compact('document_requests'));

    }

    public function showBarangayBusinessPermitRequests()
    {
    $document_requests = DocumentRequest::where('document_type', 'Barangay Business Permit')->get();

    return view('secretary.manageBusinessPermitRequest', compact('document_requests'));

    }


    public function showBarangayIndigencyPrint()
    {
    $document_requests = DocumentRequest::where('document_type', 'Barangay Indigency')->get();

    return view('secretary.bIndigencyPrint', compact('document_requests'));

    }

    public function showBarangayCertificatePrint()
    {
    $document_requests = DocumentRequest::where('document_type', 'Barangay Certificate')->get();

    return view('secretary.bIndigencyPrint', compact('document_requests'));

    }

    public function showBarangayIDPrint()
    {
    $document_requests = DocumentRequest::where('document_type', 'Barangay ID')->get();

    return view('secretary.bIdPrint', compact('document_requests'));

    }

    public function showBarangayBusinessPermitPrint()
    {
    $document_requests = DocumentRequest::where('document_type', 'Barangay Business Permit')->get();

    return view('secretary.bBusinessPermitPrint', compact('document_requests'));

    }

    public function showAllTransactions()
    {
        $document_requests = DocumentRequest::whereIn('status', ['Claimed', 'cancelled'])->get();
     
        return view('secretary.request_history', compact('document_requests'));
    }

    public function destroy($id)
    {
        $document_requests = DocumentRequest::find($id);

        if (!$document_requests) {
            return redirect()->route('requests.history')->with('error', 'Document request not found');
        }

        $document_requests->delete();

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
    $document_requests = DocumentRequest::where('document_type', 'Barangay Business Permit')->get();

    return view('adminpage.BarangayPermitTransaction', compact('document_requests'));

    }
}
