<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // Show login page
    public function login()
    {
        if (Auth::check()) {
            return $this->redirectBasedOnRole(Auth::user());
        }
        return view('auth.login');
    }

    // Handle login post
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        \Illuminate\Support\Facades\Log::info('Login attempt', [
            'email' => $email,
            'password_length' => strlen($password),
            'database_default' => config('database.default'),
            'user_exists' => User::where('email', strtolower(trim($email)))->exists(),
            'attempt_result' => Auth::attempt([
                'email' => strtolower(trim($email)),
                'password' => $password
            ])
        ]);

        $credentials = [
            'email' => strtolower(trim($email)),
            'password' => $password,
        ];

        if (!Auth::attempt($credentials, true)) {
            throw ValidationException::withMessages([
                'email' => ['Alamat email atau password salah.'],
            ]);
        }

        return $this->redirectBasedOnRole(Auth::user());
    }

    // Show register page
    public function register()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }
        return view('auth.register');
    }

    // Handle register post
    public function postRegister(Request $request)
    {
        $request->validate([
            'nik' => 'required|string|size:16|unique:users,nik',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'phone' => 'required|string|max:15',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'nik' => $request->nik,
            'name' => $request->name,
            'email' => strtolower(trim($request->email)),
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'patient',
        ]);

        Auth::login($user);

        return redirect('/Pasien/Dashboard')->with('success', 'Registrasi berhasil dan Anda telah otomatis masuk.');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Anda telah berhasil keluar.');
    }

    // Redirect helper based on role
    private function redirectBasedOnRole($user)
    {
        if ($user->role === 'admin' || $user->role === 'doctor') {
            return redirect('/admin');
        }
        return redirect('/Pasien/Dashboard');
    }
}
