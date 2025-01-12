<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Forms\FormsController;
use App\Models\ReservasiModel;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/', function () {
    return view('index');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');

Route::get('register', function () {
    return view('auth.register');
})->name('register');

Route::post('post-register', [AuthController::class, 'postRegistration'])->name('register.post'); // Tambahkan ini.

Route::get('dashboard', [FormsController::class, 'showForms'])->name('forms.show');

Route::get('/reservasi', [FormsController::class, 'showForms'])->name('reservasi.form');
Route::post('/reservasi', [FormsController::class, 'submitForm'])->name('reservasi.submit');

Route::get('/login', function () {
    return view('login');
});
Route::get('/form', function () {
    return view('form');
});

// Menampilkan form registrasi
// Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');

// // Menyimpan data registrasi ke database
// Route::post('register', [RegisterController::class, 'register'])->name('register.store');

// Route::get('/form', [YourController::class, 'form'])->middleware('checkUserSession');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

