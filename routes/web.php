<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('index');
});

Route::get('/form', function () {
    return view('form');
});

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

