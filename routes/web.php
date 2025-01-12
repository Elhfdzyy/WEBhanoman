<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Forms\FormsController;
use App\Models\ReservasiModel;

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

