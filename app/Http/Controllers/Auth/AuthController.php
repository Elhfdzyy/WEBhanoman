<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;


class AuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }

    public function adminLoginView()
    {
        return view('auth.login_admin');
    }

    public function postAdminLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');
        
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/admin/dashboard')
                ->withSuccess('Welcome back, Admin!');
        }

        return back()
            ->withError('Invalid admin credentials.')
            ->withInput($request->except('password'));
    }

    public function adminRegisterView()
    {
        return view('auth.login_admin');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return redirect()
                ->intended(route('forms.show'))
                ->withSuccess('Welcome back!');
        }

        return back()
            ->withError('Invalid credentials, please try again.')
            ->withInput($request->except('password'));
    }

    public function postRegistration(Request $request)
{
    // Sederhanakan validasi password terlebih dahulu
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users',
        'password' => [
            'required',
            'min:6',
            'confirmed'
        ],
    ]);

    try {
        // Tambahkan debug log
        Log::info('Attempting user registration', ['email' => $request->email]);
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Tambahkan debug log sukses
        Log::info('User registered successfully', ['user_id' => $user->id]);

        return redirect()
            ->route('login')
            ->withSuccess('Registration successful! Please log in.');
            
    } catch (\Exception $e) {
        // Tambahkan detail error yang lebih spesifik
        Log::error('Registration failed: ' . $e->getMessage(), [
            'email' => $request->email,
            'error_code' => $e->getCode(),
            'trace' => $e->getTraceAsString()
        ]);

        // Berikan pesan error yang lebih spesifik
        $errorMessage = 'Registration failed. ';
        if ($e instanceof \Illuminate\Database\QueryException) {
            $errorMessage .= 'Database error occurred. ';
        }
        
        return back()
            ->withError($errorMessage . 'Please try again.')
            ->withInput($request->except('password'));
    }
}

    public function postAdminRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:admin',
            'password' => [
                'required',
                'min:6',
                'confirmed',
                'regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{6,}$/'
            ],
        ]);

        try {
            $admin = Admin::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'roles' => 'admin', // Add this line to set the roles field
            ]);

            return redirect('/login-admin');
        } catch (\Exception $e) {
            Log::error('Admin registration failed: ' . $e->getMessage(), [
                'email' => $request->email,
                'trace' => $e->getTraceAsString()
            ]);

            return back()
                ->withError('An error occurred during registration. Please try again.')
                ->withInput($request->except('password'));
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->withSuccess('You have been successfully logged out.');
    }

    public function adminLogout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login-admin')
            ->withSuccess('You have been successfully logged out.');
    }
}
