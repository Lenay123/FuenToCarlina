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
use App\Http\Controllers\OfficialController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OtpVerificationController;
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

Route::get('homepage/login', function () {
    return view('homepage/login');
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


Route::get('adminpage/ManageOfficials', function () {
    return view('adminpage/ManageOfficials');
});


Route::get('adminpage/ManageActivity', function () {
    return view('adminpage/ManageActivity');
});



// Homepage Routes
Route::get('/homepage/about', [DocumentController::class, 'about'])->name('about');
Route::get('/homepage/service', [DocumentController::class, 'service'])->name('service');
Route::get('/homepage/activities', [ActivityController::class, 'showActivityHome'])->name('activities');
Route::get('/homepage/barangayofficials', [OfficialController::class, 'showOfficialsHome'])->name('barangayofficials');
Route::get('/homepage/testimonial', [DocumentController::class, 'testimonial'])->name('testimonial');
Route::get('/homepage/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/homepage/contact', [ContactController::class, 'submitForm'])->name('contact.submit');



Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegistrationController::class, 'registration'])->name('register');
Route::post('/register', [AuthController::class, 'registrationPost'])->name('register.post');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['role:user'])->group(function () {
    Route::get('residentpage/resident', [AuthController::class, 'showResident'])->name('residentpage.resident');
    Route::get('residentpage/status', [DocumentController::class, 'showStatus'])->name('residentpage.status');
    Route::post('/residentpage/account', [AuthController::class, 'updateProfile'])->name('residentpage.updateProfile');
    Route::post('/residentpage/resident', [DocumentController::class, 'store'])->name('resident.store');
    Route::get('/residentpage/transactions', [DocumentController::class, 'showTransactions']);
    Route::delete('/delete/{document_request}', DocumentController::class .'@delete')->name('delete.request');
    Route::patch('/residentpage/transactions/{document_request}/cancel', DocumentController::class .'@cancel')->name('document_requests.cancel');
    Route::get('/residentpage/barangayCertificate', [DocumentController::class, 'barangayCertificate'])->name('residentpage.barangayCertificate');
    Route::get('/residentpage/barangayIndigency', [DocumentController::class, 'barangayIndigency'])->name('residentpage.barangayIndigency');
    Route::get('/residentpage/barangayBusinessPermit', [DocumentController::class, 'barangayBusinessPermit'])->name('residentpage.barangayBusinessPermit');
    Route::get('/residentpage/account', [DocumentController::class, 'account'])->name('residentpage.Account');
    Route::get('/residentpage/TrackerNumber', [DocumentController::class, 'showTrackerNumber']);
    Route::get('/residentpage/barangayID', [DocumentController::class, 'barangayID'])->name('residentpage.barangayID');
});



// adminpage routes
Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('adminpage/AdminDashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::post('/adminpage/login', [AuthController::class, 'loginAdmin'])->name('login.adminpage');
    Route::get('/adminpagelogout', [AuthController::class, 'adminpagelogout'])->name('adminpagelogout');
    Route::get('/adminpage/AddSecretary', [RegistrationController::class, 'createSecretary']);
    Route::post('/adminpage/ManageSecretary', [RegistrationController::class, 'storeSecretary'])->name('adminpage.storeSecretary');
    Route::delete('/adminpage/DeleteSecretary/{id}', [RegistrationController::class, 'deleteSecretary'])->name('adminpage.deleteSecretary');
    Route::get('/adminpage/ManageSecretary', [RegistrationController::class, 'showSecretary'])->name('adminpage.ManageSecretary');
    Route::get('/adminpage/EditSecretary/{id}', [RegistrationController::class, 'editSecretary'])->name('adminpage.editSecretary');
    Route::put('/adminpage/UpdateSecretary/{id}', [RegistrationController::class, 'updateSecretary'])->name('adminpage.updateSecretary');
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
    Route::post('/adminpage/AdminDashboard', [AuthController::class, 'updateProfileAdmin'])->name('adminpage.updateProfileAdmin');
    Route::post('/adminpage/ManageOfficials', [OfficialController::class, 'AddOfficials'])->name('adminpage.AddOfficials');
    Route::get('/adminpage/ManageOfficials', [OfficialController::class, 'showOfficials'])->name('adminpage.showOfficials');
    Route::delete('/adminpage/DeleteOfficial/{id}', [OfficialController::class, 'deleteOfficial'])->name('adminpage.deleteOfficial');
    Route::match(['put', 'patch'], '/adminpage/ManageOfficials/{id}', [OfficialController::class, 'updateOfficials'])->name('adminpage.updateOfficials');
    Route::get('/adminpage/ManageActivity', [ActivityController::class, 'showActivity'])->name('adminpage.showActivity');
    Route::post('/adminpage/ManageActivity', [ActivityController::class, 'AddActivity'])->name('adminpage.AddActivity');
    Route::delete('/adminpage/DeleteActivity/{id}', [ActivityController::class, 'deleteActivity'])->name('adminpage.deleteActivity');
    Route::get('/adminpage/EditOfficial/{id}', [OfficialController::class, 'editOfficial'])->name('adminpage.editOfficials');
    Route::put('/adminpage/UpdateOfficial/{id}', [OfficialController::class, 'updateOfficial'])->name('adminpage.updateOfficial');
    Route::get('/adminpage/EditActivity/{id}', [ActivityController::class, 'editActivity'])->name('adminpage.editActivity');
    Route::put('/adminpage/UpdateActivity/{id}', [ActivityController::class, 'updateActivity'])->name('adminpage.updateActivity');
    Route::delete('/adminpage/DeleteCertificate/{id}', [DashboardController::class, 'deleteCertificate'])->name('adminpage.deleteCertificate');
    Route::get('/adminpage/BarangayCertificateTransaction', [DashboardController::class, 'showBarangayCertificateTransaction'])->name('adminpage.showBarangayCertificateTransaction');
    Route::delete('/adminpage/DeleteID/{id}', [DashboardController::class, 'deleteID'])->name('adminpage.deleteID');
    Route::get('/adminpage/BarangayCertificateTransaction', [DashboardController::class, 'showBarangayCertificateTransaction'])->name('adminpage.showBarangayCertificateTransaction');
    Route::delete('/adminpage/DeleteIndigency/{id}', [DashboardController::class, 'deleteIndigency'])->name('adminpage.deleteIndigency');
    Route::delete('/adminpage/DeletePermit/{id}', [DashboardController::class, 'deletePermit'])->name('adminpage.deletePermit');
    Route::delete('/adminpage/deleteTransaction/{id}', [DashboardController::class, 'deleteTransaction'])->name('adminpage.deleteTransaction');
});

// Secretary Routes
Route::group(['middleware' => ['auth', 'role:secretary']], function () {
    Route::get('secretary/secretary_dashboard', [AuthController::class, 'dashboard'])->name('dashboard_secretary');
    Route::get('/secretary/login', [LoginController::class, 'showLoginSecretary'])->name('secretary.login');
    Route::post('/secretary/login', [AuthController::class, 'loginSecretary'])->name('login.secretary');
    Route::get('/secretarylogout', [AuthController::class, 'secretarylogout'])->name('secretarylogout');
    Route::get('/secretary/secretary_dashboard', [DashboardController::class, 'showCountSecretary'])->name('dashboard_secretary');
    Route::get('/secretary/manageIndigencyRequest', [DashboardController::class, 'showBarangayIndigencyRequests'])->name('indigency.requests');
    Route::get('/secretary/manageCertificateRequest', [DashboardController::class, 'showBarangayCertificateRequests'])->name('certificate.requests');
    Route::get('/secretary/manageIdRequest', [DashboardController::class, 'showBarangayIdRequests'])->name('id.requests');
    Route::get('/secretary/manageBusinessPermitRequest', [DashboardController::class, 'showBarangayBusinessPermitRequests'])->name('business_permit.requests');
    Route::get('/secretary/request_history', [DashboardController::class, 'showAllTransactions'])->name('requests.history');
    Route::delete('/secretary/request_history/{document_request}', [DashboardController::class, 'destroy'])->name('document_requests.destroy');
    Route::put('/document-requests/{document_request}/claim', [DashboardController::class, 'claimDocument'])
        ->name('claim-document');
        Route::put('/document-requests/{document_request}/claim', [DashboardController::class, 'claimDocumentPermit'])
        ->name('claimDocumentPermit');
    Route::post('/secretary/secretary_dashboard', [AuthController::class, 'updateProfileSecretary'])->name('secretary.updateProfileSecretary');
});



Route::get('/otp-verification/{userId}', [OtpVerificationController::class, 'show'])->name('otp.verification');
Route::post('/otp-verification', 'RegistrationController@verifyOTP');