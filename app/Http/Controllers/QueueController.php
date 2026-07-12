<?php

namespace App\Http\Controllers;

use App\Models\Queue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QueueController extends Controller
{
    // Patient dashboard showing stats and queue history
    public function patientDashboard()
    {
        $user = Auth::user();
        if ($user->role !== 'patient') {
            return redirect('/admin');
        }
        
        // Fetch all queues for the user by NIK
        $queues = Queue::where('patient_nik', $user->nik)
            ->orderBy('date', 'desc')
            ->orderBy('id', 'desc')
            ->get();

        $totalVisits = $queues->where('status', 'completed')->count();
        $activeQueuesCount = $queues->whereIn('status', ['pending', 'calling'])->count();
        
        $totalSpent = 0;
        foreach ($queues as $q) {
            if ($q->status === 'completed' && $q->patient_type === 'Mandiri') {
                $totalSpent += 50000;
            }
        }
        $totalSpentFormatted = 'Rp ' . number_format($totalSpent, 0, ',', '.');

        return view('patient.dashboard', compact('queues', 'totalVisits', 'activeQueuesCount', 'totalSpentFormatted'));
    }

    // Process new booking
    public function book(Request $request)
    {
        $request->validate([
            'patient_type' => 'required|string|in:BPJS,Mandiri',
            'poliklinik' => 'required|string',
            'session' => 'required|string|in:Pagi,Siang',
            'date' => 'required|date|after_or_equal:today',
            'for_family' => 'required|string|in:0,1',
            'family_name' => 'required_if:for_family,1|nullable|string|max:255',
            'family_nik' => 'required_if:for_family,1|nullable|string|size:16',
            'complaint' => 'nullable|string',
        ]);

        $forFamily = $request->input('for_family') === '1';
        $nik = $forFamily ? $request->input('family_nik') : Auth::user()->nik;
        $name = $forFamily ? $request->input('family_name') : Auth::user()->name;
        $date = $request->input('date');
        $poliklinik = $request->input('poliklinik');
        $patientType = $request->input('patient_type');
        $session = $request->input('session');

        // Check duplicate booking
        $duplicate = Queue::where('patient_nik', $nik)
            ->where('poliklinik', $poliklinik)
            ->where('date', $date)
            ->first();

        if ($duplicate) {
            return back()->withErrors([
                'error' => "Anda sudah mengambil antrean di {$poliklinik} untuk tanggal tersebut dengan nomor {$duplicate->queue_number}."
            ])->withInput();
        }

        // Generate Queue Number
        // Count existing tickets of patient_type for this date
        $count = Queue::where('date', $date)
            ->where('patient_type', $patientType)
            ->count();

        $prefix = $patientType === 'BPJS' ? 'B' : 'M';
        $queueNumber = $prefix . '-' . str_pad($count + 1, 2, '0', STR_PAD_LEFT);

        // Save Ticket
        Queue::create([
            'queue_number' => $queueNumber,
            'patient_type' => $patientType,
            'patient_name' => $name,
            'patient_nik' => $nik,
            'poliklinik' => $poliklinik,
            'session' => $session,
            'date' => $date,
            'complaint' => $request->input('complaint'),
            'status' => 'pending',
        ]);

        return redirect('/pasien')->with('success', 'Antrean berhasil didaftarkan! Tiket Anda adalah ' . $queueNumber);
    }

    // Show check-in terminal
    public function checkin()
    {
        return view('checkin');
    }

    // Process check-in post
    public function postCheckin(Request $request)
    {
        $request->validate([
            'queue_number' => 'required|string',
        ]);

        $queueNumber = strtoupper($request->input('queue_number'));
        $today = now()->toDateString();

        $ticket = Queue::where('queue_number', $queueNumber)
            ->where('date', $today)
            ->first();

        if (!$ticket) {
            return back()->with('error', 'Tiket antrean untuk hari ini tidak ditemukan. Cek kembali kode tiket Anda.');
        }

        // Check-in success validation
        return back()->with([
            'success' => 'Check-in berhasil! Silakan menunggu di depan ruang ' . $ticket->poliklinik . '.',
            'ticket' => $ticket
        ]);
    }

    // API to fetch active queues for home page & display
    public function activeQueues()
    {
        $today = now()->toDateString();

        $callingBPJS = Queue::where('date', $today)
            ->where('patient_type', 'BPJS')
            ->where('status', 'calling')
            ->orderBy('called_at', 'desc')
            ->first();

        $callingMandiri = Queue::where('date', $today)
            ->where('patient_type', 'Mandiri')
            ->where('status', 'calling')
            ->orderBy('called_at', 'desc')
            ->first();

        $waitingBPJS = Queue::where('date', $today)
            ->where('patient_type', 'BPJS')
            ->where('status', 'pending')
            ->count();

        $waitingMandiri = Queue::where('date', $today)
            ->where('patient_type', 'Mandiri')
            ->where('status', 'pending')
            ->count();

        $history = Queue::where('date', $today)
            ->whereIn('status', ['completed', 'skipped'])
            ->orderBy('called_at', 'desc')
            ->limit(5)
            ->get();

        return response()->json([
            'calling' => [
                'bpjs' => $callingBPJS,
                'mandiri' => $callingMandiri
            ],
            'waitingCount' => [
                'bpjs' => $waitingBPJS,
                'mandiri' => $waitingMandiri
            ],
            'history' => $history
        ]);
    }
}
