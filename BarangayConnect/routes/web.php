<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServiceController;



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
Route::get('adminpage/add/AddSecretary', function () {
    return view('adminpage/add/AddSecretary');
});

Route::get('adminpage/edit/EditSecretary', function () {
    return view('adminpage/edit/EditSecretary');
});

Route::get('adminpage/ManageResidents', function () {
    return view('adminpage/ManageResidents');
});

Route::get('adminpage/add/AddResidents', function () {
    return view('adminpage/add/AddResidents');
});

Route::get('adminpage/edit/EditResident', function () {
    return view('adminpage/edit/EditResident');
});

Route::get('adminpage/ManageServices', function () {
    return view('adminpage/ManageServices');
});

Route::get('adminpage/add/AddService', function () {
    return view('adminpage/add/AddService');
});

Route::get('adminpage/edit/EditService', function () {
    return view('adminpage/edit/EditService');
});

Route::get('adminpage/AdminTransaction', function () {
    return view('adminpage/AdminTransaction');
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

Route::resource('adminpage', ServiceController::class);

// deletes a post
Route::delete('/adminpage/{service}', ServiceController::class .'@destroy')->name('adminpage.destroy');
// returns the form for editing a post
Route::get('/adminpage/{service}/edit', ServiceController::class .'@edit')->name('adminpage.edit');


