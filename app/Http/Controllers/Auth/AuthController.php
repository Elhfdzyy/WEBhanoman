<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\AdminModel;
use Hash;

class AuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
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
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => [
                'required',
                'min:6',
                'confirmed',
                'regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{6,}$/'
            ],
        ]);

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // Optional: Auto-login after registration
            // Auth::login($user);
            // return redirect()->route('forms.show')->withSuccess('Registration successful!');

            return redirect()
                ->route('login')
                ->withSuccess('Registration successful! Please log in.');
        } catch (\Exception $e) {
            Log::error('Registration failed: ' . $e->getMessage(), [
                'email' => $request->email,
                'trace' => $e->getTraceAsString()
            ]);
            
            return back()
                ->withError('An error occurred during registration. Please try again.')
                ->withInput($request->except('password'));
        }
    }

    public function postAdminRegistration(Request $request)
    {
        // Validasi input
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
            // Membuat user baru untuk admin
            $admin = Admin::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            return redirect()
                ->route('login')
                ->withSuccess('Admin registration successful! Please login.');
        } catch (\Exception $e) {
            // Jika terjadi kesalahan
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

}