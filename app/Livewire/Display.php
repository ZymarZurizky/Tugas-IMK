<?php

namespace App\Livewire;

use App\Models\Queue;
use Livewire\Component;

class Display extends Component
{
    public function render()
    {
        $today = now()->toDateString();

        // Get latest calling patient for TTS trigger
        $latestCalling = Queue::where('date', $today)
            ->where('status', 'calling')
            ->orderBy('called_at', 'desc')
            ->first();

        // Get active calling for BPJS
        $callingBPJS = Queue::where('date', $today)
            ->where('patient_type', 'BPJS')
            ->where('status', 'calling')
            ->orderBy('called_at', 'desc')
            ->first();

        // Get active calling for Mandiri
        $callingMandiri = Queue::where('date', $today)
            ->where('patient_type', 'Mandiri')
            ->where('status', 'calling')
            ->orderBy('called_at', 'desc')
            ->first();

        // BPJS pending list (limit 5)
        $pendingBPJS = Queue::where('date', $today)
            ->where('patient_type', 'BPJS')
            ->where('status', 'pending')
            ->orderBy('id', 'asc')
            ->limit(5)
            ->get();

        // Mandiri pending list (limit 5)
        $pendingMandiri = Queue::where('date', $today)
            ->where('patient_type', 'Mandiri')
            ->where('status', 'pending')
            ->orderBy('id', 'asc')
            ->limit(5)
            ->get();

        return view('livewire.display', [
            'latestCalling' => $latestCalling,
            'callingBPJS' => $callingBPJS,
            'callingMandiri' => $callingMandiri,
            'pendingBPJS' => $pendingBPJS,
            'pendingMandiri' => $pendingMandiri,
        ])->layout('layouts.app');
    }
}

