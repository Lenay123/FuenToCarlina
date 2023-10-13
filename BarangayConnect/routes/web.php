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
});

// adminpage routes
Route::resource('adminpage', ServiceController::class);
Route::delete('/adminpage/{service}', ServiceController::class .'@destroy')->name('adminpage.destroy');
Route::get('/adminpage/{id}/edit', ServiceController::class . '@edit')->name('adminpage.edit');
Route::put('/adminpage/{id}',  ServiceController::class . '@update')->name('adminpage.update');
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
Route::get('/adminpage/AdminTransaction', [StatusController::class, 'showStatuses']);
Route::delete('/adminpage/deleteTransaction/{id}', [StatusController::class, 'deleteTransaction'])->name('adminpage.deleteTransaction');
Route::get('/adminpage/AdminTransaction', [StatusController::class, 'showStatuses'])
    ->name('adminpage.AdminTransaction');

// residentpage routes
Route::post('/residentpage/resident', [DocumentController::class, 'store'])->name('resident.store');
Route::get('/residentpage/transactions', [DocumentController::class, 'showTransactions']);
Route::delete('/residentpage/{id}',  DocumentController::class .'@destroy')->name('residentpage.destroy');
Route::get('/residentpage/TrackerNumber', [DocumentController::class, 'showTrackerNumber']);
Route::patch('/residentpage/transactions/{document_request}/cancel', DocumentController::class .'@cancel')->name('document_requests.cancel');

