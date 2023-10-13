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
        $secretary = Secretary::count();
        $admin = AdminUser::count();
        $document_requests = DocumentRequest::select('document_type', \DB::raw('count(*) as count'))
        ->groupBy('document_type')
        ->get();


        return view('/adminpage/AdminDashboard', compact('user', 'secretary', 'document_requests', 'admin'));
    }
}
