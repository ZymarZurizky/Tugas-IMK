<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\QueueController;

// Public Views
Route::get('/', function () {
    $myTickets = collect();
    if (Illuminate\Support\Facades\Auth::check() && Illuminate\Support\Facades\Auth::user()->role === 'patient') {
        $today = now()->toDateString();
        $myTickets = \App\Models\Queue::where('patient_nik', Illuminate\Support\Facades\Auth::user()->nik)
            ->where('date', '>=', $today)
            ->orderBy('date', 'asc')
            ->orderBy('id', 'asc')
            ->get();
    }
    return view('home', compact('myTickets'));
});

Route::get('/antrean', \App\Livewire\Display::class); // Livewire component for lobby monitor

Route::get('/services', function () {
    return view('services');
});

Route::get('/staff', function () {
    return view('staff');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/checkin', [QueueController::class, 'checkin']);
Route::post('/checkin', [QueueController::class, 'postCheckin'])->name('queues.checkin');

// Authentication Routes
Route::get('/LoginPage', [AuthController::class, 'login'])->name('login');
Route::post('/LoginPage', [AuthController::class, 'postLogin']);
Route::get('/login', function () {
    return redirect()->route('login');
});
Route::get('/registrasi', [AuthController::class, 'register'])->name('register');
Route::post('/registrasi', [AuthController::class, 'postRegister']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Patient Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/');
    });
    Route::get('/Pasien/Dashboard', [QueueController::class, 'patientDashboard'])->name('patient.dashboard');
    Route::get('/Pasien/TransactionHistory', [QueueController::class, 'transactionHistory'])->name('patient.transactions');
    Route::post('/queues/book', [QueueController::class, 'book'])->name('queues.book');
});

// APIs (Can be loaded from web routes for simplicity)
Route::get('/api/queues/active', [QueueController::class, 'activeQueues']);
