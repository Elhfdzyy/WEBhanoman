<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Forms\FormsController;
use App\Models\ReservasiModel;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\DashboardController;


Route::get('/', function () {
    return view('index');
});


//ADMIN ROUTES
Route::get('login-admin', [AuthController::class, 'adminLoginView'])->name('admin.login');
Route::post('post-login-admin', [AuthController::class, 'postAdminLogin'])->name('admin.login.post');
Route::get('register-admin', [AuthController::class, 'adminRegisterView'])->name('admin.register');
Route::post('post-register-admin', [AuthController::class, 'postAdminRegistration'])->name('admin.register.post');
Route::get('/admin/dashboard', [App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('admin.dashboard');
Route::post('/admin/logout', [AuthController::class, 'adminLogout'])->name('admin.logout');

Route::post('/admin/dashboard/update/{id}', [DashboardController::class, 'update'])->name('admin.reservation.update');
Route::delete('/admin/dashboard/delete/{id}', [DashboardController::class, 'destroy'])->name('admin.reservation.delete');
Route::get('/admin/dashboard/search', [DashboardController::class, 'search'])->name('admin.reservation.search');

Route::get('/admin/dashboard/get-notification-count', 'App\Http\Controllers\DashboardController@getNotificationCount');



// User Routes
Route::get('login-user', [AuthController::class, 'userLoginView'])->name('user.login');
Route::post('post-login-user', [AuthController::class, 'postUserLogin'])->name('user.login.post');
Route::get('register-user', [AuthController::class, 'userRegisterView'])->name('user.register');
Route::post('post-register-user', [AuthController::class, 'postUserRegistration'])->name('user.register.post');
Route::post('/user/logout', [AuthController::class, 'userLogout'])->name('user.logout'); 

Route::get('form-reservasi', [FormsController::class, 'showForms'])->name('forms.show');

Route::get('/reservasi', [FormsController::class, 'showForms'])->name('reservasi.form');
Route::post('/reservasi', [FormsController::class, 'submitForm'])->name('reservasi.submit');

Route::get('/form', function () {
    return view('form');
});

// Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');

// Menyimpan data registrasi ke database
// Route::post('register', [RegisterController::class, 'register'])->name('register.store');

// Route::get('/form', [YourController::class, 'form'])->middleware('checkUserSession');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

