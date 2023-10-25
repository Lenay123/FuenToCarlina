<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\SecretaryUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StatusController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage/index');
});

Route::get('homepage/about', function () {
    return view('homepage/about');
});

Route::get('homepage/activities', function () {
    return view('homepage/activities');
});

Route::get('homepage/barangayofficials', function () {
    return view('homepage/barangayofficials');
});

Route::get('homepage/contact', function () {
    return view('homepage/contact');
});

Route::get('homepage/service', function () {
    return view('homepage/service');
});


Route::get('homepage/login', function () {
    return view('homepage/login');
});

Route::get('homepage/testimonial', function () {
    return view('homepage/testimonial');
});

Route::get('residentpage/resident', function () {
    return view('residentpage/resident');
});

Route::get('residentpage/transactions', function () {
    return view('residentpage/transactions');
});


Route::get('adminpage/AdminDashboard', function () {
    return view('adminpage/AdminDashboard');
});

Route::get('adminpage/ManageSecretary', function () {
    return view('adminpage/ManageSecretary');
});
Route::get('adminpage/AddSecretary', function () {
    return view('adminpage/AddSecretary');
});

Route::get('adminpage/EditSecretary', function () {
    return view('adminpage/EditSecretary');
});

Route::get('adminpage/ManageResidents', function () {
    return view('adminpage/ManageResidents');
});

Route::get('adminpage/AddResidents', function () {
    return view('adminpage/AddResidents');
});

Route::get('adminpage/EditResident', function () {
    return view('adminpage/edit/EditResident');
});

Route::get('adminpage/ManageServices', function () {
    return view('adminpage/ManageServices');
});

Route::get('adminpage/AdminTransaction', function () {
    return view('adminpage/AdminTransaction');
});
Route::get('adminpage/login', function () {
    return view('adminpage/login');
});
Route::get('secretary/login', function () {
    return view('secretary/login');
});

Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegistrationController::class, 'registration'])->name('register');
Route::post('/register', [AuthController::class, 'registrationPost'])->name('register.post');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function (){
    
    Route::get('residentpage/resident', [AuthController::class, 'showResident'])->name('residentpage.resident');
    Route::get('residentpage/resident', [DOcumentController::class, 'showStatus'])->name('residentpage.resident');
    Route::post('/residentpage/Account', [AuthController::class, 'updateProfile'])->name('residentpage.updateProfile');

});

// adminpage routes
Route::get('/adminpage/AddSecretary', [SecretaryUserController::class, 'createSecretary']);
Route::post('/adminpage/ManageSecretary', [SecretaryUserController::class, 'storeSecretary'])->name('adminpage.storeSecretary');
Route::delete('/adminpage/DeleteSecretary/{id}', [SecretaryUserController::class, 'deleteSecretary'])->name('adminpage.deleteSecretary');
Route::get('/adminpage/ManageSecretary', [SecretaryUserController::class, 'showSecretary'])->name('adminpage.ManageSecretary');
Route::get('/adminpage/EditSecretary/{id}', [SecretaryUserController::class, 'editSecretary'])->name('adminpage.editSecretary');
Route::put('/adminpage/UpdateSecretary/{id}', [SecretaryUserController::class, 'updateSecretary'])->name('adminpage.updateSecretary');
Route::get('/adminpage/ManageResidents', [RegistrationController::class, 'showResident'])->name('adminpage.ManageResidents');
Route::get('/adminpage/AddResident', [RegistrationController::class, 'createResident']);
Route::post('/adminpage/ManageResidents', [RegistrationController::class, 'storeResident'])->name('adminpage.storeResident');
Route::delete('/adminpage/DeleteResident/{id}', [RegistrationController::class, 'deleteResident'])->name('adminpage.deleteResident');
Route::get('/adminpage/EditResident/{id}', [RegistrationController::class, 'editResident'])->name('adminpage.editResident');
Route::put('/adminpage/UpdateResident/{id}', [RegistrationController::class, 'updateResident'])->name('adminpage.updateResident');
Route::get('/adminpage/AdminDashboard', [DashboardController::class, 'showCount'])->name('dashboard');
Route::get('/adminpage/BarangayCertificateTransaction', [DashboardController::class, 'showBarangayCertificateTransaction'])->name('certificate.transaction');
Route::get('/adminpage/BarangayIDTransaction', [DashboardController::class, 'showBarangayIDTransaction'])->name('id.transaction');
Route::get('/adminpage/BarangayIndigencyTransaction', [DashboardController::class, 'showBarangayIndigencyTransaction'])->name('indigency.transaction');
Route::get('/adminpage/BarangayPermitTransaction', [DashboardController::class, 'showBarangayPermitTransaction'])->name('permit.transaction');
Route::delete('/adminpage/deleteTransaction/{id}', [DashboardController::class, 'deleteTransaction'])->name('adminpage.deleteTransaction');
// residentpage routes
Route::post('/residentpage/resident', [DocumentController::class, 'store'])->name('resident.store');
Route::get('/residentpage/transactions', [DocumentController::class, 'showTransactions']);
Route::delete('/residentpage/{id}',  DocumentController::class .'@destroy')->name('residentpage.destroy');
Route::get('/residentpage/TrackerNumber', [DocumentController::class, 'showTrackerNumber']);
Route::patch('/residentpage/transactions/{document_request}/cancel', DocumentController::class .'@cancel')->name('document_requests.cancel');
Route::get('/residentpage/barangayCertificate', [DocumentController::class, 'barangayCertificate'])->name('residentpage.barangayCertificate');
Route::get('/residentpage/barangayIndigency', [DocumentController::class, 'barangayIndigency'])->name('residentpage.barangayIndigency');
Route::get('/residentpage/barangayBusinessPermit', [DocumentController::class, 'barangayBusinessPermit'])->name('residentpage.barangayBusinessPermit');
Route::get('/residentpage/Account', [DocumentController::class, 'account'])->name('residentpage.Account');
Route::get('/residentpage/barangayID', [DocumentController::class, 'barangayID'])->name('residentpage.barangayID');

// Secretary Routes

Route::get('/secretary/secretary_dashboard', [DashboardController::class, 'showCountSecretary'])->name('dashboard_secretary');
Route::get('/secretary/manageIndigencyRequest', [DashboardController::class, 'showBarangayIndigencyRequests'])->name('indigency.requests');
Route::get('/secretary/manageCertificateRequest', [DashboardController::class, 'showBarangayCertificateRequests'])->name('certificate.requests');
Route::get('/secretary/manageIdRequest', [DashboardController::class, 'showBarangayIdRequests'])->name('id.requests');
Route::get('/secretary/manageBusinessPermitRequest', [DashboardController::class, 'showBarangayBusinessPermitRequests'])->name('business_permit.requests');
Route::get('/secretary/request_history', [DashboardController::class, 'showAllTransactions'])->name('requests.history');
Route::delete('/secretary/request_history/{document_request}', [DashboardController::class, 'destroy'])->name('document_requests.destroy');
// Route::get('secretary/notifications', function () {
//     return view('secretary/notifications');
// });
Route::get('/secretary/notifications', [DashboardController::class, 'showAllNotifications'])->name('secretary.notifications');
